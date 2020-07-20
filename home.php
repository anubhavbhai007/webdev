<?php 
require"common.php";

if(!isset($_SESSION['id'])){
header('location:login.php');
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
 <nav class="navbar fixed-top navbar-light bg-light">
    <a class="navbar-brand"  href="index.php"><button type="button" class="btn btn-light">YouMart</button></a>
    <form class="form-inline">
      <a href="home.php"><button type="button" class="btn btn-light">Home</button></a>
	  <span><a href="contactus.php"><button type="button" class="btn btn-light">Contactus</button></a></span>&nbsp;&nbsp;  
	  <span><a href="aboutus.php"><button type="button" class="btn btn-light">Aboutus</button></a></span>&nbsp;&nbsp;  
 <span><a href="logout.php"><button type="button" class="btn btn-light">Log Out</button></a></span> 
	  <a href="setting.php"><button type="button" class="btn btn-light">Settings</button></a>
	  	  <a href="cart.php"><button type="button" class="btn btn-light">Cart</button></a>

 
    </form>
  </nav>
</div>

<div class="container-fluid margin">

  <div class="row row-cols-1 row-cols-md-3">
    <div class="col mb-4">
      <div class="card">
<h5 class="card-header">Mobile1</h5>	
	<img class="img-size" src="images/images9.jpg" class="card-img-top" alt="...">

        <div class="card-body">
<h5 class="card-title">Note 9 Pro is Rs. 14,999 </h5>         
 <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          
          <a href="cart.php" role="button" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>
    </div>
	

	
	
    <div class="col mb-4">
      <div class="card">
	          <h5 class="card-header">Mobile2</h5>

        <img class="img-size" src="images/images 7.jpg" class="card-img-top" alt="...">

        <div class="card-body">
          <h5 class="card-title">Micromax is Rs. 14,999 </h5>
			<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <a href="cart.php" role="button" class="btn btn-primary">Add to Cart</a>       
      </div>
    </div>
    </div>
    <div class="col mb-4">
      <div class="card">
	          <h5 class="card-header">Mobile3</h5>

        <img class="img-size" src="images/images8.jpg" class="card-img-top" alt="...">

        <div class="card-body">
          <h5 class="card-title">Huawei is Rs. 14,999 </h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <a href="cart.php" role="button" class="btn btn-primary">Add to Cart</a>        
      </div>
     </div>
    </div>
	 <div class="col mb-4">
      <div class="card">
        <h5 class="card-header">Mobile4</h5>
		<img class="img-size" src="images/images6.jpg" class="card-img-top" alt="...">

        <div class="card-body">
		<h5 class="card-title">One Plus is Rs. 14,999 </h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          
          <a href="cart.php" role="button" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>
    </div>
	 <div class="col mb-4">
      <div class="card">
        <h5 class="card-header">Mobile5</h5>
		<img class="img-size" src="images/images 7.jpg" class="card-img-top" alt="...">

        <div class="card-body">
          <h5 class="card-title">Vivo Pro is Rs. 14,999 </h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          
          <a href="cart.php" role="button" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>
    </div>

   <div class="col mb-4">
      <div class="card">
	          <h5 class="card-header">Mobile6</h5>

        <img class="img-size" src="images/images4.jpg" class="card-img-top" alt="...">

        <div class="card-body">
         <h5 class="card-title">Iphone is Rs. 14,999 </h5>
<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
 content. This content is a little bit longer.</p>
          <a href="" role="button" class="btn btn-primary">Add to Cart</a>  
		  </div>
    </div>
    </div>
	<div class="col mb-4">
      <div class="card">
        <h5 class="card-header">Mobile7</h5>
		<img class="img-size" src="images/images3.jpg" class="card-img-top" alt="...">

        <div class="card-body">
<h5 class="card-title">Mi Pro is Rs. 14,999 </h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          
          <a href="cart.php" role="button" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>
    </div>
	<div class="col mb-4">
      <div class="card">
        <h5 class="card-header">Mobile8</h5>
		<img class="img-size" src="images/images4.jpg" class="card-img-top" alt="...">

        <div class="card-body">
<h5 class="card-title">Samsun Galaxy is Rs. 14,999 </h5>       
   <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          
          <a href="cart.php" role="button" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>
    </div>
	<div class="col mb-4">
      <div class="card">
        <h5 class="card-header">Mobile9</h5>
		<img class="img-size" src="images/images10.jpg" class="card-img-top" alt="...">

        <div class="card-body">
<h5 class="card-title">Ipad is Rs. 14,999 </h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          
          <a href="cart.php" role="button" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>
    </div>
	
</div>
<?php require "footer.php";
?> </body>
</html>