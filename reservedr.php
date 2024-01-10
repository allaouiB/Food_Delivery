<?php

require('connect.php');
session_start();
$idf = $_GET['id'];

    $query = mysqli_query($conn, "SELECT `iddrink`, `img`, `name`, `prix` FROM `drink` WHERE iddrink=$idf");

    if ($query) {
        // Fetch all rows as an associative array
        $cit = mysqli_fetch_all($query, MYSQLI_ASSOC);
    } else {
        // Handle query execution errors
        echo "Error: " . mysqli_error($conn);
    }
    
    ?>







<html lang="en">
<head>
<title>Pizza - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .cc{
            display:flex;
        }
       .aa{
        padding: 20px;
       }
       
        .forme{
            padding: 10px;
            margin-left:100px;
            
        }
        h1{
            margin-left:85px;
            text-decoration: underline;
        }
        #send{
            margin-left:140px;
            margin-top:30px;
            width: 100px;
            border-radius: 10px;
            font-weight:bold;
        }
        #send:hover{
             background-color: darkkhaki;
        }
        .aa{
            width: 60px;
            height: 80px;
            
        }
        .inp{
            width: 350px;
            height:40px;
        }
        img{
          width: 500px;
        }
        h3{
          margin-left:130px;
        }
        
  
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Delicous</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link"></a></li>
	          <li class="nav-item"><a href="menu.html" class="nav-link"></a></li>
	          <li class="nav-item"><a href="services.html" class="nav-link"></a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link"></a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link"></a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link"></a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>

    <?php if (!empty($cit)) {
        foreach ($cit as $ct) {
            $idf=$ct['iddrink'];
            $img = $ct['img'];
            $name = $ct['name'];
            $prix = $ct['prix'];
            $_SESSION['name']=$name;
  
  echo" 
  <div class='cc'>
    <div class='ordre'>    
    <img src='$img' alt=''></div>
     
    <div class='forme'>
  <form action='reservation.php' method='post'>
    <h1>Reservation</h1>
    <h3>$name</h3>
    ";

    }} ;?>
        <div class='aa'>
      
        Nom:
        <input type="text" name="name" id="" placeholder="Nom" class='inp'>
      </div>
      <div class='aa'>
      
        Numéro:
        <input type="number" name="num" id="" placeholder="06********" class='inp'>
      </div>
      <div class='aa'>
      
        Adresse:
        <input type="text" name="adresse" id="" placeholder="Adresse" class='inp'>
      </div>
      <div class='aa'>
         Ordre:
        <input type="number" name="numorder" id="" value='1' class='inp'>
      </div>
      
   
    <input type="submit" name="send" value="Order" id='send'>
  </form>
</div>
  
 









































<script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>
</html>