<html>

<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="form.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Sample Website</title>
</head>

<body>

	<div class="row">
		<div class="col-lg-6">
			<div class="logo">
				<a href='index.html'>
				<img src="Logo.png" alt="logo image"></a>
			</div>
		</div>
	
		
	
	</div>

	<div>
		<div class="row">
		<div class="col-lg-12">
			<nav>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="Products.html">Products</a></li>
					<li><a href="AboutUs.html">About</a></li>
					<li><a href="ContactUs.html">ContactUs</a></li>
					<li><a href="loginform.php">LogIn</a></li>
				</ul>
			</nav>
		</div>
		</div>
	</div>

	

	<form method="POST" action="#">
	
		<label>Username</label><br>
		<input type="text" name="user" placeholder="Enter Username Here"><br>
		<label>Password</label><br>
		<input type="password" name="pass" placeholder="Enter Password Here"><br><br>
		<input type="submit" name="submit" value="Login"><br>
	
	</form>

<?php
	$dbcon = mysqli_connect('localhost','root','','weblabproject');
	
	if(isset($_POST['submit']))
	{
		$uname = $_POST['user'];
		$upass = $_POST['pass'];
	
		$query = "select * from tbluser where username = '$uname' AND userpassword = '$upass'";
		
		$result = mysqli_query($dbcon, $query);	
		
		$row = mysqli_num_rows($result);
		
		if($row > 0)
		{
			session_start();
			$_SESSION['username'] = $uname;
			$_SESSION['userpassword'] = $upass;
			
			header('Location: displayproducts.php');
		}
		
	}
	
	else{
			echo "Username OR Password is incorrect";
		}
	
?>


<div class="row">
		<footer>
			<div class="footer-menu">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a target="_blank" href="Products.html">Products</a></li>
					<li><a target="_blank" href="AboutUs.html">About</a></li>
					<li><a target="_blank" href="ContactUs.html">ContactUs</a></li>
					<li><a target="_blank" href="dummylogin.php">LogIn</a></li>
				</ul>
			</div>
			
		

			<div style="color:#FFF; text-align:center">
				<p>© Copyright 2020 gorillamusic.com - All Rights Reserved</p>
			</div>
		</footer>
	</div>

</body>
</html>