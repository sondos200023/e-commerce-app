<?php 

  $database_name = "sa";
  $con = mysqli_connect("localhost","root","",$database_name);
if(isset( $_GET['email']))
{	$req="INSERT INTO utilasateurs (idu,nom,email,mdp)values(null,'{$_GET['name']}','{$_GET['email']}','{$_GET['psw']}')" ;

if($resultat=mysqli_query($con,$req)){
	echo "<label style='text-align:center; color: #960406;'> L'inscription a ete correctement effectuee.....</label>";
}else
{
	echo "<label style= '  text-transform: uppercase;
    font-weight: 500;     margin-left: 990px 0;color: red;'>L'inscription a echouee!!! </label>";
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
  
<body >
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

button {

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



    </style>
 
       
    
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
            <form action='inscription.php' method='GET'class="box">
                <h1>Sign in</h1>
                <p><b>Name </b><br><input type="text" name="name" placeholder="votre nom"/></p>
<p><b>Email </b> <br><input type="text" name="email" placeholder="exemple@gmail.com"/></p>
<p><b>password</b><br><input type="password" name="psw"/></p>
<p><input type="submit"class="signupbtn"value="Sign in"/></p>
<p><b></p>

                </form>
                <form action="connexion.php">
<p><button  >Connexion</p>
</button>
              
               
            </div>
        </div>
    </div>
</div>
</body>
 
          
    
        
