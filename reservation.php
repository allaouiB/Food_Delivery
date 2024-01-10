<?php
require('connect.php');
session_start();
if(isset($_REQUEST['send'])){
    $nom=$_SESSION['name'];
    $name=$_REQUEST['name'];
    $num=$_REQUEST['num'];
    $adresse=$_REQUEST['adresse'];
    $numorder=$_REQUEST['numorder'];
    $query="INSERT INTO `reserver`(`nom`, `tele`, `adresse`, `nbr`, `nomorder`) VALUES
     ('$name','$num','$adresse','$numorder','$nom')";
     $ex=mysqli_query($conn,$query);
     if($ex){
         echo'<script>alert("order envoyer");</script>';
         echo '<script>window.location.href = "menu.php";</script>';
     }
     else{
        echo'<script>alert("error");</script>';
     }
 }

?>
