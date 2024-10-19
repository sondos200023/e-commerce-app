<?php 
session_start();
require_once('cnx.php'); ?>

<?php
$idu=$_GET["id"];
$database_name = "sa";
$con = mysqli_connect("localhost","root","",$database_name); 
$id=mysqli_insert_id($con);
$req=mysqli_query($con,"delete from admin where admin.id = {$idu}");
header ("location:admin.php");


?>