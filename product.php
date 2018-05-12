<?php 
$page="Produit";
$title = "Produit Détail";

$metaD = "#";
include '/inc/header.php';
?>

<?php 

// Script Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php 
// Check to see the URL variable is set and that it exists in the database
if (isset($_GET['id'])) {
	// Connect to the MySQL database  
    include "storescripts/connect_to_mysql.php"; 
	$id = preg_replace('#[^0-9]#i', '', $_GET['id']); 
	// Use this var to check to see if this ID exists, if yes then get the product 
	// details, if no then exit this script and give message why
	$sql = mysql_query("SELECT * FROM products WHERE id='$id' LIMIT 1");
	$productCount = mysql_num_rows($sql); // count the output amount
    if ($productCount > 0) {
		// get all the product details
		while($row = mysql_fetch_array($sql)){ 
			 $product_name = $row["product_name"];
			 $price = $row["price"];
			 $details = $row["details"];
			 $category = $row["category"];
			 $secteur = $row["secteur"];
			 $date_added = strftime("%b %d, %Y", strtotime($row["date_added"]));
         }
		 
	} else {
		echo '<p class="style_css" align="center" style="font-size:20px;color:red;font-weight:bold;padding-top:100px;">Cet article existe pas. </p>';
    
	    exit();
	}
		
} else {
	echo '<p class="style_css" align="center" style="font-size:20px;color:red;font-weight:bold;padding-top:100px;"> Les données pour rendre cette page sont manquantes.</p>';
	exit();
}
mysql_close();
?>



 
<div align="center" id="mainWrapper">
  
  <div class="container" id="pageContent" style="padding-top: 20px;width: 70%">
  <table width="100%" border="0" cellspacing="0" cellpadding="15">
  <tr>
    <td width="30%" valign="top"><img src="inventory_images/<?php echo $id; ?>.jpg"  style="" width="200" height="188" alt="<?php echo $product_name; ?>" /></br>
      <a href="inventory_images/<?php echo $id; ?>.jpg">View Full Size Image</a></td>
    <td width="70%" valign="top"><h3 style="color: #9FD700;"><?php echo $product_name; ?></h3>
      <p><?php echo "£".$price; ?><br />
        <br />
       <h2 style="font-size:17px;"> <?php echo $secteur; ?> </h2> <br />
       <h2 style="font-size:16px;"> <?php echo  $category; ?></h2>

    <br />
<br />
       <span style="line-height: 20px;font-size: 15px;"><?php echo $details; ?></span> 
<br />
        </p>
      <form id="form1" name="form1" method="post" action="cart.php">
        <input type="hidden" name="pid" id="pid" value="<?php echo $id; ?>" />
        <input type="submit" name="button" id="button" value="Add to Shopping Cart" />
      </form>
      </td>
    </tr>
</table>
</br>
 </div> 
</div>
  <?php include 'inc/footer.php';?>