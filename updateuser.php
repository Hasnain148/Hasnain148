<?php

		$id=$_POST['id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];



		$q="UPDATE user SET name='$name',
							email='$email',
							password='$password'
						where id='$id'";



		$conn=mysqli_connect('localhost','root','','hasnain_db');

		$exe=mysqli_query($conn,$q);

		header("location:showuser.php");

?>