<DOCTYPE HTML>
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
	
	
	

<div>
	<div class="row">
	<div class="col-lg-12">
		<nav>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a target="_blank" href="Products.html">Products</a></li>
				<li><a target="_blank" href="AboutUs.html">About</a></li>
				<li><a target="_blank" href="ContactUs.html">ContactUs</a></li>
			</ul>
		</nav>
	</div>
	</div>
	
	
	
	<?php
$dbcon = mysqli_connect('localhost','root','','weblabproject');


 $query="select * from tblproducts";
 $res=mysqli_query($dbcon,$query);
 ?>
 
<div class="container">
<div class="row">

 
 <?php
 
while($row=mysqli_fetch_array($res))
{
	$var = $row['productInStock'];
	if($var==1)
	{
 ?>
 
 <?php
	}
}
	$pid = $row['productID'];
	$query = "select image from tblproducts where productID = $pid";
	$result = mysqli_query($dbcon,$query);
?>
</div>
</div>
</div>
	
	
<div style="height:50%;"></div>
	<div class="row">
		<footer>
			<div class="footer-menu">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a target="_blank" href="Products.html">Products</a></li>
					<li><a target="_blank" href="AboutUs.html">About</a></li>
					<li><a target="_blank" href="ContactUs.html">ContactUs</a></li>
				</ul>
			</div>
			
			

			<div style="color:#FFF; text-align:center">
				<p>© Copyright 2020 gorillamusic.com - All Rights Reserved</p>
			</div>
		</footer>
	</div>
</body>
</html>