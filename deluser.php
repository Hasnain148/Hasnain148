<?php
		$id=$_GET['id'];

		$q="DELETE FROM user where id='$id'";

		$conn=mysqli_connect('localhost','root','','hasnain_db');

    	$res=mysqli_query($conn,$q);

    	header("location:showuser.php");

    	?>


    	<a href="edituser.php?id=<?php echo $row['id'];?>"></a>

?>