<?php 
session_start();
require_once('cnx.php'); ?>

<?php
$id=$_GET["id"];
$database_name = "sa";
$con = mysqli_connect("localhost","root","",$database_name); 
$idcd=mysqli_insert_id($con);
$req=mysqli_query($con,"delete from lignedecommande where lignedecommande.idproduit = {$id}");
header ("location:cart1.php");


?>



