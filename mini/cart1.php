<?php require_once('cnx.php') ?>
<!doctype html>
<html>
<head>
    
<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Acceuil</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- CSS only -->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   
</head>
<body >
    <style>
      body {
        background-image: url("9.jpg");
        background-size: 200%;
 
      }
    </style>
 <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
<body>
<div id="macommande">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Robokits HR</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="page1.php">Acceuil</a></li>
                        <li class="nav-item"><a class="nav-link" href="apropos.php">A propos</a></li>
                        <li class="nav-item"><a class="nav-link" href="Robotiques.php">Produits Robotiques</a></li>
                   <li class="nav-item"><a class="nav-link" href="puzz.php">Produits Puzz</a></li>
                            </ul>
                        </li>
                    </ul>
                  
            </div>
        </nav>

<?php
$reqselect1="select * from lignedecommande,produits where lignedecommande.idproduit=produits.id";
$reqselect2="select * from lignedecommande,robotique where lignedecommande.idproduit=robotique.id";
$reqselect3="select * from lignedecommande,puzz where lignedecommande.idproduit=puzz.id";

$resultat1=mysqli_query($con,$reqselect1);
$resultat2=mysqli_query($con,$reqselect2);
$resultat3=mysqli_query($con,$reqselect3);

?>
</p>
<div style="clear: both"></div>
        <h3 class="title2">Les Achats</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Nom de produit</th>
                <th width="13%">Prix</th>
                <th width="17%">Supprimer</th>
            </tr>

<?php
while($ligne=mysqli_fetch_assoc($resultat1))
{                

	echo "<tr >";
	echo "<td>".$ligne['pname']."</td>";
	echo "<td>".$ligne['price']."</td>";
	echo"<td><a href=\"supprimer.php?id={$ligne['id']}\">Supprimer</a></td>";
	echo "</tr>";
}?>
   <?php
while($ligne=mysqli_fetch_assoc($resultat2))
{                

	echo "<tr >";
	echo "<td>".$ligne['pname']."</td>";
    echo "<td>".$ligne['price']."</td>";
	echo"<td><a href=\"supprimer.php?id={$ligne['id']}\">Supprimer</a></td>";
	echo "</tr>";
}?>  
<?php
while($ligne=mysqli_fetch_assoc($resultat3))
{                

	echo "<tr >";
	echo "<td>".$ligne['pname']."</td>";
    echo "<td>".$ligne['price']."</td>";
	echo"<td><a href=\"supprimer.php?id={$ligne['id']}\">Supprimer</a></td>";
	echo "</tr>";
}?>  
</div>
</body>