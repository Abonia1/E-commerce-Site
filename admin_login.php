<?php 
$page="Login";
$title = "Login";

$metaD = "#";
include '/inc/header.php';
?>
<?php 

session_start();
if (isset($_SESSION["manager"])) {
    header("location: admin_home.php"); 
    exit();
}
?>
<?php 
// Parse the log in form if the user has filled it out and pressed "Log In"
if (isset($_POST["username"]) && isset($_POST["password"])) {

	$manager = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["username"]); 
    $password = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["password"]); 
    // Connect to the MySQL database  
    include '/storescripts/connect_to_mysql.php'; 
    $sql = mysql_query("SELECT id FROM admin WHERE username='$manager' AND password='$password' LIMIT 1"); // query the person
    // MAKE SURE PERSON EXISTS IN DATABASE 
    $existCount = mysql_num_rows($sql); // count the row nums
    if ($existCount == 1) { // evaluate the count
	     while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
		 }
		 $_SESSION["id"] = $id;
		 $_SESSION["manager"] = $manager;
		 $_SESSION["password"] = $password;
		 header("location: admin_home.php");
         exit();
    } else {
		echo 'Cette information est incorrecte, réessayez <a href="admin_home.php">Cliquez ici</a>';
		exit();
	}
}
?>

<div align="center" id="mainWrapper">
  
  <div id="pageContent"><br />
    <div align="left" style="margin-left:24px;width: 50%;">
      <h2 style="font-size: 18px;font-weight: bold;color:#9FD700;text-align: center;">Veuillez Vous Connecter Pour Gérer Le Magasin</h2><br>
      <form id="form1" name="form1" method="post" action="admin_login.php" >
       <label>Nom d'utilisateur </label><br />
          <input name="username" type="text" id="username" size="40" />
        <br /><br />
        <label>mot de passe</label><br />
       <input name="password" type="password" id="password" size="40" />
       <br />
       <br />
       <br />
       
         <input type="submit" name="button" id="button" value="Log In" />
       
      </form>
      <p>&nbsp; </p>
    </div>
    <br />
  <br />
  <br />
  </div>
 
</div>
<?php include 'inc/footer.php';?>
