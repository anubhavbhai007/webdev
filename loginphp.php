
<?php
require"common.php";
 
         $username = isset($_POST['username'])?mysqli_real_escape_string($con,$_POST["username"]):''; 
        $password = isset($_POST['password'])? mysqli_real_escape_string($con,$_POST["password"]):''; 
		$query="SELECT username, password FROM user WHERE username = '".$username."' AND  password = '".$password."'";
        $result1 = mysqli_query($con,$query);

        if(mysqli_num_rows($result1) > 0 )
        { 
$_SESSION['email']=$email;
$_SESSION['id']=mysqli_insert_id($con);			
            echo "The email or password are correct!";
        header('location:home.php');
			exit;
		}
        else
        {
            echo 'The email or password are incorrect!';
			  header('location:index.php');
			exit;
        }


?>