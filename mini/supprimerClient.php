<?php 
session_start();
require_once('cnx.php'); ?>

<?php
$idu=$_GET["idu"];
$database_name = "sa";
$con = mysqli_connect("localhost","root","",$database_name); 
$id=mysqli_insert_id($con);
$req=mysqli_query($con,"delete from utilasateurs where utilasateurs.idu = {$idu}");
header ("location:admin.php");


?>