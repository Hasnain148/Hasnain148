<?php
		$id=$_GET['id'];

		 $q="SELECT * FROM user where id='$id'";
	

		$conn=mysqli_connect('localhost','root','','hasnain_db');

		$exe=mysqli_query($conn,$q);

		$row=mysqli_fetch_object($exe);
		//print_r($row);die;



?>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<div class="container">
	
<link rel="stylesheet" type="text/css" href="styles.css">



<div class="container">
	
	<div class="row">



				<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    
			     <img class="logo" src="images/slider.jpg">
			     
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li class="active"><a href="index.php">Home</a></li>
			        <li class="active"><a href="aboutus.php">About Us</a></li>
			        <li class="active"><a href="contactus.php">Contact Us</a></li>
			       
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			          	 <li><a href="postsbycategory.php?id=1">Physics</a></li>
			          	  <li><a href="postsbycategory.php?id=1">Physics</a></li>
			          	   <li><a href="postsbycategory.php?id=1">Physics</a></li>
			          	    <li><a href="postsbycategory.php?id=1">Physics</a></li>
			          	     <li><a href="postsbycategory.php?id=1">Physics</a></li>
			           
			         
			          </ul>
			        </li>
			      </ul>
			      <form class="navbar-form navbar-left" >
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-default">Submit</button>
			      </form>
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="signin.php">Sign In</a></li>
			        <li><a href="signup.php">Sign Up</a></li>
			        <li><a href="logout.php">Logout</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		
	</div>

	<div class="row">


		<div class="col-md-2">
			
		</div>

			<div class="col-md-6">

							<div class="title">

						Welcome to my website ! Please Sign In
						
					</div>

								<form class="form-horizontal" method="POST" action="updateuser.php">

									   <input type="hidden" value="<?php echo $row->id; ?>" name="id"></br>
				  <div class="form-group">
				    <label  class="col-sm-2 control-label">Email</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="email" value="<?php echo $row->email; ?>">
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="col-sm-2 control-label">Password</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control"  name="password" value="<?php echo $row->password ?>">
				    </div>
				  </div>
				  <div class="form1-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox"> Remember me
				        </label>
				      </div>`
				    </div>
				  </div>
				  <div class="form1-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="update" class="btn btn-default">Sign in</button>
				    </div>
				  </div>
				</form>
			
		</div>

			<div class="col-md-2">
			
		</div>

			<div class="col-md-2">
			
		</div>
		
	</div>

	<div class="row">

		<div align="center" class="footer">

			Copyright
			
		</div>

		
	</div>



</div>


		  