<?php 
require"common.php";
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
  <link rel="stylesheet" href="css/styles.css">
 </head>



 <body>
 <div class="container-fluid">
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand"><button type="button" class="btn btn-light">YouMart</button></a>
    <form class="form-inline">
      <a href="home.php"><button type="button" class="btn btn-light">Home</button></a>
	  <span><a href="contactus.php"><button type="button" class="btn btn-light">Contactus</button></a></span>&nbsp;&nbsp;  
	  <span><a href="aboutus.php"><button type="button" class="btn btn-light">Aboutus</button></a></span>&nbsp;&nbsp;  
 <span><a href="logout.php"><button type="button" class="btn btn-light">Log Out</button></a></span> 	  
	  <a href="setting.php"><button type="button" class="btn btn-light">Settings</button></a>

    </form>
  </nav>

  <div class="container mt-5">
    <h1>CHANGE PASSWORD</h1>
  
    <div class="row">
      <div class="col-sm-8">
        <div class="card">
          <div class="card-body">
  
            <!-- Makes POST request to /register route -->
            <form action="setting.php" method="POST">
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Old Password">
              </div>
              <div class="form-group">
                <input type="password" name="newpassword" class="form-control" placeholder="New Password">
              </div> 
              <div class="form-group">

                <input type="password" name="renewpassword" class="form-control" placeholder="Re-Type Password">
              </div>
              <button type="submit" class="btn btn-dark">Change</button>
            </form>
  
          </div>
        </div>
      </div>


  </div>
 <?php
 $password=isset($_POST['password'])?mysqli_real_escape_string($con,$_POST['password']):'';
 $confirm_password=isset($_POST['renewpassword'])?mysqli_real_escape_string($con,$_POST['renewpassword']):'';
$password= isset($_POST['newpassword'])?mysqli_real_escape_string($con,$_POST['newpassword']):'';
$user_id = $_SESSION['id'];

  $result = mysqli_query($con, "SELECT *from user WHERE id='$user_id'");
    $row = mysqli_fetch_array($result);
    if ($_POST["password"] == $row["password"])
	{
if($password===$confirm_password){
$update_name_query = "UPDATE user SET password = '$password' WHERE id = '$user_id'";
$update_name_result = mysqli_query($con, $update_name_query) or die(mysqli_error($con));
echo "password updated";
}else{
	echo "password do not match";
}
}else{
	echo"password incorrect"; 
}
?>
 
</body>
</html>