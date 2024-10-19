<?php require_once('cnx.php') ?>


<?php 
 //Nous allons démarrer la session avant toute chose
   session_start() ;
  if(isset($_POST['boutton-valider'])){ // Si on clique sur le boutton , alors :
    $email = $_POST['email'] ;
      $mdp = $_POST['mdp'] ;
      $erreur = "" ;
    //Nous allons verifiér les informations du formulaire
    $req = "SELECT * FROM admin WHERE email = '$email' AND mdp ='$mdp' ";
    if($resultat=mysqli_query($con,$req)){
        $ligne=mysqli_fetch_assoc($resultat);
        
		if($ligne!=0){
			session_start();
			$_SESSION['user']=$_POST['email'];
			$_SESSION['iduser']=$ligne['mdp'];
            header("Location:admin.php") ;
		}}
    $req = "SELECT * FROM utilasateurs WHERE email = '$email' AND mdp ='$mdp' ";
    if($resultat=mysqli_query($con,$req)){
        $ligne=mysqli_fetch_assoc($resultat);
        
		if($ligne!=0){
			session_start();
			$_SESSION['user']=$_POST['email'];
			$_SESSION['iduser']=$ligne['mdp'];
            header("Location:page1.php") ;
		}
           //Si le nombre de ligne est > 0 , on sera redirigé vers la page bienvenu
            // Nous allons créer une variable de type session qui vas contenir l'email de l'utilisateur
        else {//si non
            $erreur = "Adresse Mail ou Mots de passe incorrectes !";
        }
    }
    }
  
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Connexion</title>
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
<style>
      body {
        background-image: url("9.jpg");
        background-size: 200%;

}

.card {
    margin-bottom: 20px;
    border: none
}

.box {
    width: 500px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    background: #191919;
    text-align: center;
    transition: 0.25s;
    margin-top: 100px

}

.box input[type="text"],
.box input[type="password"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 10px 10px;
    width: 250px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s
}

.box h1 {
    color: white;
    text-transform: uppercase;
    font-weight: 500
}
.box p {
    color: white;
   
    
}
.box input[type="text"]:focus,
.box input[type="password"]:focus {
    width: 300px;
    border-color: #2ecc71
}

.box input[type="submit"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer
}
button:hover {
    background: #2ecc71
}
button{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer
}
.box input[type="submit"]:hover {
    background: #2ecc71
}

.p{
    color:white;
}
.Erreur {
    
    color: white;
    text-transform: uppercase;
    font-weight: 500;
    color: red;
    margin: 10px 0;
    text-align: center;
}


    </style>

<body>
  
       <?php 
       if(isset($erreur)){// si la variable $erreur existe , on affiche le contenu ;
           echo "<p class= 'Erreur'>".$erreur."</p>"  ;
       }
       ?>
      
 
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form action="" method="POST" class="box">
                <h1>Connexion</h1>
<p><b>Email </b> <br><input type="text" name="email" placeholder="exemple@gmail.com"/></p>
<p><b>password</b><br><input type="password" name="mdp"/></p>
<p><input type="submit"value="Valider"name="boutton-valider"/></p>
<p><b></p>

                </form>
                <form action="inscription.php">
<p><button  >S'inscrire</p>
</button>
              
            </div>
        </div>
    </div>
</div>
</body>
</html>
    
        
