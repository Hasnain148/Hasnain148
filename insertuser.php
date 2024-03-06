<?php
	    $email=$_POST['email'];
		$password=$_POST['password'];
		


		$q="INSERT into user(email,password)values('$email','$password')";

		$conn=mysqli_connect('localhost','root','','hasnain_db');

		$res=mysqli_query($conn,$q);

		echo 'done';

?>