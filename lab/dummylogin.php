<html>
<head>
	<title>Add Data</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="form.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>


<div class="row"  style="background-color:black;">
	<div class="col-lg-6">
		<div class="logo">
			<a href='index.php'>
			<img src="Logo.png" alt="logo image"></a>
		</div>
	</div>
	
	
	
</div>


	<div>
		<div class="row">
		<div class="col-lg-12">
			<nav  style="background-color:dimgrey;">
				<ul>
					<li><a target="_blank" href="index.html">Home</a></li>
					<li><a target="_blank" href="Products.html">Products</a></li>
					<li><a target="_blank" href="AboutUs.html">About</a></li>
					<li><a target="_blank" href="ContactUs.html">ContactUs</a></li>
					<li><a target="_blank" href="dummylogin.php">LogIn</a></li>
				</ul>
			</nav>
		</div>
		</div>
	</div>
 
	<form action="#" method="post" name="form1">
		<table align="center" width="25%" border="0">
			<tr> 
				<td>Username</td>
				<td><input type="text" name="user" placeholder="Enter Username Here"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="pass" placeholder="Enter Password Here"></td>
			</tr>
			<tr>
				<td></td>
				<td class="tdmargin"><input type="submit" name="submit" value="Login" class="btn btn-success"></td>
			</tr>
		</table>
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
			else{
				?>
				<div style="color:red">
			<?php
			echo "Username OR Password is incorrect";
			?>
			</div>
<?php
		}
	}
	
?>



	
	
	<div class="row">
		<footer style="background-color:dimgrey;">
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