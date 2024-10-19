<?php require_once('cnx.php');?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Robotiques</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Robotiques</title>
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
      <style>
  .span-or {
    display: block;
    position: absolute;
    left: 50%;
    top: -2px;
    margin-left: -25px;
    background-color: #fff;
    width: 50px;
    text-align: center;
  }
  .hr-or {
    background-color: #cdcdcd;
    height: 1px;
    margin-top: 0px !important;
    margin-bottom: 0px !important;
  }
footer.nb-footer {
background: #222;
border-top: 4px solid #b78c33; }
footer.nb-footer .about {
margin: 0 auto;
margin-top: 40px;
max-width: 1170px;
text-align: center; }
footer.nb-footer .about p {
font-size: 13px;
color: #999;
margin-top: 30px; }
footer.nb-footer .about .social-media {
margin-top: 15px; }
footer.nb-footer .about .social-media ul li a {
display: inline-block;
width: 45px;
height: 45px;
line-height: 45px;
border-radius: 50%;
font-size: 16px;
color: #b78c33;
border: 1px solid rgba(255, 255, 255, 0.3); }
footer.nb-footer .about .social-media ul li a:hover {
background: #b78c33;
color: #fff;
border-color: #b78c33; }
footer.nb-footer .footer-info-single {
margin-top: 30px; }
footer.nb-footer .footer-info-single .title {
color: #aaa;
text-transform: uppercase;
font-size: 16px;
border-left: 4px solid #b78c33;
padding-left: 5px; }
footer.nb-footer .footer-info-single ul li a {
display: block;
color: #aaa;
padding: 2px 0; }
footer.nb-footer .footer-info-single ul li a:hover {
color: #b78c33; }
footer.nb-footer .footer-info-single p {
font-size: 13px;
line-height: 20px;
color: #aaa; }
footer.nb-footer .copyright {
margin-top: 15px;
background: #111;
padding: 7px 0;
color: #999; }
footer.nb-footer .copyright p {
margin: 0;
padding: 0; }
      body {
        background-image: url("9.jpg");
        background-size: 200%;
 
      }
   
      body {
        background-image: url("9.jpg");
        background-size: 200%;
 
      }
    </style>

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-4 px-lg-5">
           <a class="navbar-brand" href="#!"><h2>Robokits HR</h2></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <h3> <li class="nav-item"><a class="nav-link active" aria-current="page" href="page1.php">Acceuil</a></li></h3>
                    <h3> <li class="nav-item"><a class="nav-link" href="apropos.php">A propos</a></li></h3>
                    <h3> <li class="nav-item"><a class="nav-link" href="Robotiques.php"> Robotiques</a></li></h3>
                    <h3><li class="nav-item"><a class="nav-link" href="puz.php"> Puzz</a></li></h3>
                    <h3><li class="nav-item"><a class="nav-link" href="robokits.php"> Kits</a></li></h3>
                    </ul>
                   
                    <form class="d-flex">
                  
                   <button class="btn btn-outline-light" type="submit">
                   <h3> <i class="bi-cart-fill me-1"></i>
                        Panier
                        </button></h3>
                        <?php
if (isset($_SESSION['user'])){
	echo '(<h2><a class="btn btn-outline-light" href="deconnecter1.php">deconnexion</a></h2>)';
}
else{
echo'<a class="btn btn-outline-light" href="connexion.php">
<i class="bi bi-person-fill"><h3></h3></i></a></p>';
}?>
                      
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header--> 
        <?php
        if (isset($_SESSION['user'])){
	echo "<h1>BIENVINUE A RoBoKits {$_SESSION['user']}</h1>";

        }?>
    
            <header >
              
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
   <img src="images/dog.jpg" style="width:1226px; height:400px;" />

      <div class="container">
        <div class="carousel-caption text-start">
          <p><a class="btn btn-lg btn-dark" href="Robotiques.php">Produits Robotiques</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
   <img src="images/14.jpg" style="width:1226px; height:400px;" />

      <div class="container">
        <div class="carousel-caption">
          <h1></h1>
          <p></p>
          <p><a class="btn btn-lg btn-dark" href="#"></a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
<img src="images/robotique.jpg" style="width:1226px; height:400px;" />  


      


<div class="container">
        <div class="carousel-caption text-end">
     
          <p><a class="btn btn-lg btn-dark" href="#"></a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>     
                    
                
        </header>
        <!-- Section-->
   
        <section class="py-5">
                 <div class="container" style="width: 65%">
        <?php
if(isset($_GET['btnsubmit'])){
	$mc=$_GET['motcle'];
$reqselect="select * from robotique where pname like '%{$mc}%'";}
else{
            $query = "SELECT * FROM  robotique ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>

                    <div class="col-md-3">

                        <form method="POST" action="ajoutercommande.php?id=<?=$row['id']?>">
                            <div class="product">
                            <img class="card-img-top" src="<?php echo $row["image"]; ?>" >
                            <h5 class="fw-bolder"><?php echo $row["pname"]; ?></h5>
                            <h5 class="fw-bolder"><?php echo $row["price"]; ?></h5>
                               <!--   <input type="text" name="quantity" class="form-control" value="1">-->
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                 <input href="cart1.php?id=<?=$row['id']?>" type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>                               

                    </div>
                    <?php
                }
            }
        }
        ?>

        </section>
        <!-- Footer-->
        <link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>

<hr class="hr-or">
<hr class="hr-or">
<footer class="nb-footer">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="about">
  <div class="social-media">
    <ul class="list-inline">
      <li><a href="https://www.facebook.com/" title=""><i class="fa fa-facebook"></i></a></li>
      <li><a href="https://twitter.com/" title=""><i class="fa fa-twitter"></i></a></li>
      <li><a href="google.fr" title=""><i class="fa fa-google-plus"></i></a></li>
      <li><a href="https://www.linkedin.com/" title=""><i class="fa fa-linkedin"></i></a></li>
    </ul>
  </div>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
  <h2 class="title">Help Center</h2>
  <ul class="list-unstyled">
    <li><a href="" title=""><i class="fa fa-angle-double-right"></i> How to Pay</a></li>
    <li><a href="" title=""><i class="fa fa-angle-double-right"></i> carte</a></li>
    <li><a href="" title=""><i class="fa fa-angle-double-right"></i> distance</a></li>
    <li><a href="" title=""><i class="fa fa-angle-double-right"></i> delivery Info</a></li>
  </ul>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
  <h2 class="title">Customer information</h2>
  <ul class="list-unstyled">
    <li><a href="" title=""><i class="fa fa-angle-double-right"></i> About Us</a></li>
    <li><a href="" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
    <li><a href="" title=""><i class="fa fa-angle-double-right"></i> Sell Your Items</a></li>
    <li><a href="" title=""><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
    <li><a href="" title=""><i class="fa fa-angle-double-right"></i> RSS</a></li>
  </ul>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
  <h2 class="title">Security & privacy</h2>
  <ul class="list-unstyled">
    <li><a href="" title=""><i class="fa fa-angle-double-right"></i> Terms Of Use</a></li>
    <li><a href="" title=""><i class="fa fa-angle-double-right"></i> Privacy Policy</a></li>
    <li><a href="" title=""><i class="fa fa-angle-double-right"></i> Return / Refund Policy</a></li>
    <li><a href="" title=""><i class="fa fa-angle-double-right"></i> Store Locations</a></li>
  </ul>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
  <h2 class="title">Payment</h2>
  <p>Facile....payé avec carte banquaire....a la livraison ....a distance </p>
  
</div>
</div>
</div>
</div>

<section class="copyright">
<div class="container">
<div class="row">
<div class="col-sm-6">
<p>SA First project</p>
</div>
<div class="col-sm-6"></div>
</div>
</div>
</section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

