<?php require_once('cnx.php') ?>
<?php
session_start();

?>
<!doctype html>
<html>
<head>
    
<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Admin</title>
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">tous les produits</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Produits Robotiques</a></li>
                                <li><a class="dropdown-item" href="puzz.php">Produits Puzz</a></li>
                                <li><a class="dropdown-item" href="#!">Nouveaux </a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
				    <a href="ajoutuser.php" class="btn btn-primary" ><i class="bi bi-person-plus-fill"></i>Ajouter Utilisateur  </a>
                    </form>
                    <form class="d-flex">
                    <a href="ajoutadmin.php" class="btn btn-primary" ><i class="bi bi-person-plus-fill"></i>Ajouter Admin </a>
                    </form>
        </nav>


<?php
$con= mysqli_connect("localhost","root","","sa");
$sql="select* from utilasateurs";
$result1= mysqli_query($con,$sql);
?>

<div class="table1" >
    <h1>table utilisateurs</h1>
    
    <table id="example" class="table table-striped table-bordered" style="width:100%">
       <thead>
           <tr>
               <th>nom</th>
               <th>Email</th>
               <th>mot de passe</th>
               <th>supprimer</th>
</tr>
</thead>
<?php
while($row=$result1->fetch_assoc()):?>
<tbody>
<tr>
    <td><?php echo $row['nom']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['mdp']; ?></td>
    <td><?php  echo"<a href=\"supprimerClient.php?idu={$row['idu']}\">Supprimer</a>" ?></td>

</tr>
</tbody>
<?php endwhile; ?>
</table>
</div>
</table>
</div>

<?php
$con= mysqli_connect("localhost","root","","sa");
$sql="select* from admin";
$result1= mysqli_query($con,$sql);
?>

<div class="table1" >
    <h1>table Admin</h1>
    
    <table id="example" class="table table-striped table-bordered" style="width:100%">
       <thead>
           <tr>
               <th>nom</th>
               <th>Email</th>
               <th>mot de passe</th>
               <th>supprimer</th>
</tr>
</thead>
<?php
while($row=$result1->fetch_assoc()):?>
<tbody>
<tr>
    <td><?php echo $row['nom']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['mdp']; ?></td>
    <td><?php  echo"<a href=\"supprimerAdmin.php?id={$row['id']}\">Supprimer</a>" ?></td>

</tr>
</tbody>
<?php endwhile; ?>
</table>
</div>
</table>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

</body>
</html>