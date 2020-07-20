
<?php
include "header.php"
?>
<body>
<div>
<nav class="navbar fixed-top navbar-light bg-light" style="margin-bottom:40px;">
    <a class="navbar-brand" href="index.php"><button type="button" class="btn btn-light">YouMart</button></a>
    <form class="form-inline">
      <a href="home.php"><button type="button" class="btn btn-light">Home</button></a>
	  <a href="login.php"><button type="button" class="btn btn-light">Log In</button></a>
	  <span><a href="contactus.php"><button type="button" class="btn btn-light">Contactus</button></a></span>&nbsp;&nbsp;  
	  <span><a href="aboutus.php"><button type="button" class="btn btn-light">Aboutus</button></a></span>&nbsp;&nbsp;  
	  <span><a href="signup.php"><button type="button" class="btn btn-light">Sign up</button></a></span> 
    </form>
  </nav>
</div>
  <div class="container-fluid margin">
<div class="container mt-5 ">
  <h1>LOGIN</h1>

  <div class="row">
    <div class="col-sm-8">
      <div class="card">
        <div class="card-body">

          <!-- Makes POST request to /register route -->
          <form action="loginphp.php" method="POST">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-dark">LOGIN</button>
          </form><br>
<span><a href="home.php"><button type="submit" class="btn btn-dark registor-button">REGISTOR</button></a></span>
        </div>
      </div>
    </div>

    </div>	
	</div>
	</div>
</body>
</html>










