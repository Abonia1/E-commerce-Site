
<?php 
$page="Form";
$title = "Ajoute Produit";

$metaD = "#";
include '/inc/header.php';
?>

<?php 

session_start();
if (!isset($_SESSION["manager"])) {
    header("location: admin_login.php"); 
    exit();
}
// to check that this manager SESSION value is in fact in the database
$managerID = preg_replace('#[^0-9]#i', '', $_SESSION["id"]); // filter everything but numbers and letters
$manager = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["manager"]); 
$password = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["password"]); 
// Run mySQL query to be sure that this person is an admin and that their password session var equals the database information
// Connect to the MySQL database  
include '/storescripts/connect_to_mysql.php'; 
$sql = mysql_query("SELECT * FROM admin WHERE id='$managerID' AND username='$manager' AND password='$password' LIMIT 1"); // query the person
// MAKE SURE PERSON EXISTS IN DATABASE 
$existCount = mysql_num_rows($sql); // count the row nums
if ($existCount == 0) { // evaluate the count
	 echo "Vos données de session de connexion ne sont pas enregistrées dans la base de données.";
     exit();
}
?>



<?php 
// Script Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>


<?php 
// Delete Item Question to Admin, and Delete Product if they choose
if (isset($_GET['deleteid'])) {
	echo '<p class="style_css" align="center" style="font-size:20px;color:red;font-weight:bold;padding-top:100px;">Voulez-vous vraiment supprimer le produit avec ID de '. $_GET['deleteid'] . '? <a href="inventory_list.php?yesdelete=' . $_GET['deleteid'] . '">OUI</a> | <a href="inventory_list.php">NON</a></p>';
	exit();
}
if (isset($_GET['yesdelete'])) {
	// remove item from system and delete its picture
	// delete from database
	$id_to_delete = $_GET['yesdelete'];
	$sql = mysql_query("DELETE FROM products WHERE id='$id_to_delete' LIMIT 1") or die (mysql_error());
	// unlink the image from server
	// Remove The Pic
    $pictodelete = ('inventory_images/$id_to_delete.jpg');
    if (file_exists($pictodelete)) {
       		    unlink($pictodelete);
    }
	header("location: inventory_list.php"); 
    exit();
}
?>





<?php 
// Parse the form data and add inventory item to the system
if (isset($_POST['product_name'])) {
	
  $product_name = mysql_real_escape_string($_POST['product_name']);
	$price = mysql_real_escape_string($_POST['price']);
	$category = mysql_real_escape_string($_POST['category']);
	$secteur = mysql_real_escape_string($_POST['secteur']);
	$details = mysql_real_escape_string($_POST['details']);
	// See if that product name is an identical match to another product in the system
	$sql = mysql_query("SELECT id FROM products WHERE product_name='$product_name' LIMIT 1");
	$productMatch = mysql_num_rows($sql); // count the output amount
    if ($productMatch > 0) {
		echo '<p class="style_css" align="center" style="font-size:16px;color:red;font-weight:bold;padding-top:100px;">Désolé, vous avez essayé de placer un "nom de produit" en double dans le système,<a href="inventory_list.php">Cliquez ici</a></p>';
		exit();
	}
	// Add this product into the database now
	$sql = mysql_query("INSERT INTO products (product_name, price, details, category, secteur, date_added) 
        VALUES('$product_name','$price','$details','$category','$secteur',now())") or die (mysql_error());
     $pid = mysql_insert_id();
	// Place image in the folder 
	$newname = "$pid.jpg";
	move_uploaded_file( $_FILES['fileField']['tmp_name'], "inventory_images/$newname");
	header("location: inventory_list.php"); 
    exit();
}
?>





<?php 
// This block grabs the whole list for viewing
$product_list = "";
$sql = mysql_query("SELECT * FROM products ORDER BY date_added DESC");
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
			 $product_name = $row["product_name"];
			 $price = $row["price"];
			 $date_added = strftime("%b %d, %Y", strtotime($row["date_added"]));
			 $product_list .= "Product ID: $id - <strong>$product_name</strong> - £$price - <em>Added $date_added</em> &nbsp; &nbsp; &nbsp; <a href='inventory_edit.php?pid=$id'>edit</a> &bull; <a href='inventory_list.php?deleteid=$id'>delete</a><br />";
    }
} else {
	$product_list = "Vous n'avez encore aucun produit répertorié dans votre magasin";
}
?>





<div  id="mainWrapper" align="center">
  
  <div id="pageContent" ><br />
    <div align="right" style="margin-right:32px;font-size: 18px;"><a href="inventory_list.php#inventoryForm">+ Ajoute Nouveau Produit</a></div>
<div align="left" style="margin-left:24px;font-size: 15px;">
      <h2 style="color:  #9FD700;font-size: 20px;">ENZYNOV-Liste de Produits</h2>
      <?php echo $product_list; ?>
    </div>
    <hr />
    
    <a name="inventoryForm" id="inventoryForm"></a>
    <h3 style="font-size: 18px;color:#9FD700;font-weight: bold;font-weight: bold; ">
    &darr; Formulaire Pour Ajouter Un Nouveau Produit &darr;
    </h3>
    <div align="left" style="margin-left:24px;width: 50%;">
    <form align="left"  action="inventory_list.php" enctype="multipart/form-data" name="myForm" id="myform" method="post">
    <label >Nom De Produit</label>
    <input name="product_name" type="text" id="product_name" ><br>

    <label>Prix De Produit £</label>
    <input name="price" type="text" id="price" size="12"  />   <br>

     <label>Catégorie</label>
     <select name="category" id="category"  style="color:#2eb2ff;font-size: 16px">
          <option value="Ecologic" style="color: blue;">Ecologic</option>
          <option value="Biologic" style="color: green;">Biologic</option>
          </select>  <br>


    <label >SECTEUR CONCERNÉ</label>
    <select name="secteur" id="secteur" style="color:#2eb2ff;font-size:16px;">
    <option value="Bâtiment et Travaux Publics">Bâtiment et Travaux Publics</option>
      <option value="Collectivités et Hôtellerie">Collectivités et Hôtellerie</option>
      <option value="Cuisine Professionnelle">Cuisine Professionnelle</option>
      <option value="Garages et Parkings">Garages et Parkings</option>
       <option value="Grandes et Moyennes Surfaces">Grandes et Moyennes Surfaces</option>
        <option value="Industries">Industries</option>
         <option value="Nautique">Nautique</option>
          <option value="Secteur Pétrolier">Secteur Pétrolier</option>
           <option value="Transport">Transport</option>
    </select>


    <label>Détail</label><br>
    <textarea name="details" id="details"  style="height:200px"></textarea>
    <br>
          <label>Image de Produit</label>
          <input type="file" name="fileField" id="fileField" />
          <label><br><br>
          <input type="submit" name="button" id="button" value="Ajoute Cette Produit" />
        </label>
      </form>
  </div>
    <br />
  <br />
  </div>
 </div>
  <?php include 'inc/footer.php';?>