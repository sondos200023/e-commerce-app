<!Doctype html>
<?php
session_start();
session_unset();
session_destroy();
header('location:page1.php');
?>