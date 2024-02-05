 <?php
 include("config.php");
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
	 $a=$_POST['email'];
	 $b=$_POST['password'];
	 
	 $qry=mysqli_query($con,"INSERT INTO user(email,password) VALUES('$a','$b')");
	 if($qry==true)
	 {
		 header("location:success.php");
	 }
	 else
	 {
		 echo "not".mysqli_error();
	 }
 }
 ?>