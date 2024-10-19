<?php 
session_start();
require_once('cnx.php'); ?>
<?php
//echo $_GET["id"];
if(!isset($_SESSION["user"])){
	echo"txt";
	header("location:connexion.php?id=".$_GET['id']);
}
else{
	$idcd=mysqli_insert_id($con);
$req=mysqli_query($con,"insert into lignedecommande values(null,{$_GET['id']},1,{$idcd})");
header("location: cart1.php?id=".$idcd);	
}
?>