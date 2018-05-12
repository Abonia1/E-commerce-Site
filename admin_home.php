<?php 
$page="adminhome";
$title = "AdminHome";

$metaD = "#";
include '/inc/header.php';
?>
<?php 
// This file is www.developphp.com curriculum material
// Written by Adam Khoury January 01, 2011
// http://www.youtube.com/view_play_list?p=442E340A42191003
session_start();
if (!isset($_SESSION["manager"])) {
    header("location: admin_login.php"); 
    exit();
}
// Be sure to check that this manager SESSION value is in fact in the database
$managerID = preg_replace('#[^0-9]#i', '', $_SESSION["id"]); // filter everything but numbers and letters
$manager = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["manager"]); // filter everything but numbers and letters
$password = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["password"]); // filter everything but numbers and letters
// Run mySQL query to be sure that this person is an admin and that their password session var equals the database information
// Connect to the MySQL database  
include '/storescripts/connect_to_mysql.php'; 
$sql = mysql_query("SELECT * FROM admin WHERE id='$managerID' AND username='$manager' AND password='$password' LIMIT 1"); // query the person
// ------- MAKE SURE PERSON EXISTS IN DATABASE ---------
$existCount = mysql_num_rows($sql); // count the row nums
if ($existCount == 0) { // evaluate the count
	 echo "Vos données de session de connexion ne sont pas enregistrées dans la base de données.";
     exit();
}
?>

  

<div align="center" id="mainWrapper">
  <div id="pageContent"><br />
    <div  class="container" align="center" style="margin-left:24px;padding-top: 20px;min-height: 100%;">
      <h2 style="font-size: 20px;">Bonjour <span style="color: #9FD700;"><?php echo "$manager"; ?></span>,Que voudriez-vous faire aujourd'hui?</h2>
      <p style="font-size: 18px;color:#2eb2ff;"><a href="inventory_list.php">Gérer Produits</a><br />
      <a href="#">Gérer Blah Blah </a></p>
    </div>
    <br />
  <br />
  <br />
  </div>
 
</div>
<?php include 'inc/footer.php';?>
