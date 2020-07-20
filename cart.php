<?php 
session_start();
if(!isset($_SESSION['id'])){
header('location: index.php');
exit;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

 <head>
  <meta charset="utf-8">
  <title>YouMart</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap-social.css">
  <link rel="stylesheet" href="css/style.css">
 </head>



 <body>
 <div>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand"><button type="button" class="btn btn-light">PhoneSop</button></a>
    <form class="form-inline">
      <a href="home.php"><button type="button" class="btn btn-light">Home</button></a>
	  <span><a href="contactus.php"><button type="button" class="btn btn-light">Contactus</button></a></span>&nbsp;&nbsp;  
	  <span><a href="aboutus.php"><button type="button" class="btn btn-light">Aboutus</button></a></span>&nbsp;&nbsp;   
 <span><a href="logout.php"><button type="button" class="btn btn-light">Log Out</button></a></span> 	
	  <a href="setting.php"><button type="button" class="btn btn-light">Settings</button></a>
 
    </form>
  </nav>
</div>
<div  class="container-fluid margin">
   <div class="row success">
    <div class="col-6">Item  Number</div>
    <div class="col-6">Price</div>
   </div>
</div>
<hr>

  </div>
 </body>
</html>