
<?php
require "header.php";
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-6">
      <div>
        <div class="card-body">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSKPJqV8OcY9T84qIwpogGBsHyWTabmdlZxIw&usqp=CAU" alt="phone image">
   </div>
      </div>
    </div>

    <div class="col-sm-6">
    <div>
        <div class="card-body">
        <h1>SIGN UP</h1>
          <!-- Makes POST request to /register route -->
          <form action="signupphp.php" method="POST">

		 <div class="form-group">
              <input type="text" class="form-control" name="username" required = "true" placeholder="username">
            </div> 

		 <div class="form-group">
              <input type="text" class="form-control" name="first_name" required = "true" placeholder="first Name">
            </div> 
			 <div class="form-group">
              <input type="text" class="form-control" name="last_name" required = "true" placeholder="last Name">
            </div> 
				
			<div class="form-group">
              <input type="email" class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required = "true" placeholder="Email">
			  
            </div>
			
            <div class="form-group">
              <input type="password" class="form-control" pattern=".{6,}" name="password" required = "true" placeholder="password">

			</div>
            <div class="form-group">
              <input type="tel" class="form-control" name="phone" required = "true" placeholder="Contact">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" required = "true" placeholder="City">
            </div>
            <div class="form-group">
             <input type="text" class="form-control" required = "true" placeholder="Address">
            </div>

            <button type="submit" class="btn btn-dark">Register</button>
          </form><br><hr><a href="login.php"><button type="submit" class="btn btn-dark">Login</button></a>

        </div>
      </div>
      
    </div>
 </div>
</body>
</html>