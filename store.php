
<?php 
$page="store";
$title = "Store";

$metaD = "#";
include '/inc/header.php';
?>
<?php 

// Script Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php 
// Run a select query to get my letest 6 items
// Connect to the MySQL database  
include 'storescripts/connect_to_mysql.php'; 
$dynamicList = "";
$sql = mysql_query("SELECT * FROM products ORDER BY date_added DESC LIMIT 6");
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
			 $product_name = $row["product_name"];
			 $price = $row["price"];
			 $date_added = strftime("%b %d, %Y", strtotime($row["date_added"]));
			 $dynamicList .= '<table width="100%" border="0" cellspacing="0" cellpadding="4">
        <tr>
          <td width="30%" valign="top"><a href="product.php?id=' . $id . '"><img style="border:#666 1px solid;" src="inventory_images/' . $id . '.jpg" alt="' . $product_name . '" width="120" height="120" border="1" /></a></td>

          <td width="70%" valign="top">' . $product_name . '<br />
            £' . $price . '<br />
            <a href="product.php?id=' . $id . '">Voir les détails du Produit</a></td>
        </tr><br /><br \>
      </table>';
    }
} else {
	$dynamicList = "Nous n'avons pas encore de produits dans notre magasin";
}
mysql_close();
?>

<div align="center" id="mainWrapper">
  
  <div id="pageContent" style="padding-top: 20px;">
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr id="check">
    <td width="32%" valign="top"><h3>DETAILS ABOUT ENZYNOV PRODUCTS</h3>
      <p>products details go here</p>
      <h3>Our New product in marine sector</h3>
      <p>company product Promotion via videos<br />
        <a href="http://www.youtube.com" target="_blank">http://www.youtube.com/enzynov</a> </p> <br />
        <br />
      <h3>Product Usage tips</h3>
      <h2>FEATURES</h2>
      <!-- <script> 
$(document).ready(function(){
    $("button").live("click", function(){
        $("li").slideToggle();
    });
});
</script>-->

      <ul>
      <li>list type feature</li>
      <li>feature 2</li>
      <li>feature 3</li></ul>
      <button>click here for show/hide feature</button>
      
      <p>
        Usage tips Go here</p></td>
    <td width="40%" valign="top"><h3 style="color: #9FD700">LISTE DES PRODUITS</h3>
      <p><?php echo $dynamicList; ?><br />
        </p>
      <p><br />
      </p></td>
    <td width="30%" valign="top"><h3>Pictogram in Can and its Details </h3>
      <p>Details go here</p></td>
  </tr>
</table>

  </div>
</div>
  <?php include 'inc/footer.php';?>


