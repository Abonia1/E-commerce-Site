<?php 
$page="Edit";
$title = "Edit";

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
include "storescripts/connect_to_mysql.php"; 
$sql = mysql_query("SELECT * FROM admin WHERE id='$managerID' AND username='$manager' AND password='$password' LIMIT 1"); // query the person
// ------- MAKE SURE PERSON EXISTS IN DATABASE ---------
$existCount = mysql_num_rows($sql); // count the row nums
if ($existCount == 0) { // evaluate the count
	 echo "Vos données de session de connexion ne sont pas enregistrées dans la base de données";
     exit();
}
?>
<?php 
// Script Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php 
// Parse the form data and add inventory item to the system
if (isset($_POST['product_name'])) {
	
	$pid = mysql_real_escape_string($_POST['thisID']);
  $product_name = mysql_real_escape_string($_POST['product_name']);
	$price = mysql_real_escape_string($_POST['price']);
	$category = mysql_real_escape_string($_POST['category']);
	$secteur = mysql_real_escape_string($_POST['secteur']);
	$details = mysql_real_escape_string($_POST['details']);
	// See if that product name is an identical match to another product in the system
	$sql = mysql_query("UPDATE products SET product_name='$product_name', price='$price', details='$details', category='$category', secteur='$secteur' WHERE id='$pid'");
	if ($_FILES['fileField']['tmp_name'] != "") {
	    // Place image in the folder 
	    $newname = "$pid.jpg";
	    move_uploaded_file($_FILES['fileField']['tmp_name'], "inventory_images/$newname");
	}
	header("location: inventory_list.php"); 
    exit();
}
?>
<?php 
// Gather this product's full information for inserting automatically into the edit form below on page
if (isset($_GET['pid'])) {
	$targetID = $_GET['pid'];
    $sql = mysql_query("SELECT * FROM products WHERE id='$targetID' LIMIT 1");
    $productCount = mysql_num_rows($sql); // count the output amount
    if ($productCount > 0) {
	    while($row = mysql_fetch_array($sql)){ 
             
			 $product_name = $row["product_name"];
			 $price = $row["price"];
			 $category = $row["category"];
			 $secteur = $row["secteur"];
			 $details = $row["details"];
			 $date_added = strftime("%b %d, %Y", strtotime($row["date_added"]));
        }
    } else {
	    echo "Désolé, le produit n'existe pas.";
		exit();
    }
}
?>

<div align="center" id="mainWrapper">
 
  <div id="pageContent"><br />
    <div align="right" style="margin-right:32px;font-size: 18px;"><a href="inventory_list.php#inventoryForm">+ Ajoute Nouveau Produit</a></div>

    <hr />
    <a name="inventoryForm" id="inventoryForm"></a>
    <h3 style="font-size: 18px;color:#9FD700;font-weight: bold;font-weight: bold;">
    &darr; Formulaire Pour Ajouter Un Nouveau Produit &darr;
    </h3>
   
    <form align="left" style="width: 50%;height: 20%;" action="inventory_edit.php"  enctype="multipart/form-data" name="myForm" id="myform" method="post">
    <label >Nom De Produit</label>
    <input name="product_name" type="text" id="product_name" value="<?php echo $product_name; ?>" /><br>

    <label>Prix De Produit £</label>
    <input name="price" type="text" id="price"  value="<?php echo $price; ?>" />   <br>

     <label>Category</label>
     <select name="category" id="category"  style="color:#2eb2ff;font-size: 16px">

          <option value="Ecologic">Ecologic</option>
          <option value="Biologic">Biologic</option>
          </select>  <br>


    <label >SECTEUR CONCERNÉ</label>
    <select name="secteur" id="secteur" style="color:#2eb2ff;font-size:16px;">
      <option value="<?php echo $secteur; ?>"><?php echo $secteur; ?></option>
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
    <textarea name="details" id="details"  style="height:200px"><?php echo $details; ?></textarea>
    <br>
          <label>Image de Produit</label>
          <input type="file" name="fileField" id="fileField" />
         
          <label><br><br> 
            <input name="thisID" type="hidden" value="<?php echo $targetID; ?>" />
          <input type="submit" name="button" id="button" value="Mettre à jour" />
        </label>
        
    </form>
    <br />
  <br />
  </div>
</div>
 <?php include 'inc/footer.php';?>  
