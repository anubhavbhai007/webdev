<?php 
if(!isset($_SESSION['id'])){
header('location: index.php');
exit;
}
?>
<?php
require "header.php";
?>

<div class="container-fluid " style="background-color: beige;">
    <div class="success">
<h3>Thank You for Odering from You-Mart.The order shall be delivered to yoou shortly.</h3>
<p>Order some more electronic items.<a href="home.php">HOME</a></p>
</div>
</div>


  </div>
  </body>
  </html>