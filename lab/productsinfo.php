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
					<li><a href="dummylogin.php">LogIn</a></li>
				</ul>
			</nav>
		</div>
		</div>
	</div>




<?php

$dbcon = mysqli_connect('localhost','root','','weblabproject');

$id=$_GET['productID'];
$query="select * from tblproducts where productID=$id";
$res=mysqli_query($dbcon,$query);

$row=mysqli_fetch_array($res);

	?>
	
	<div class="col-lg-12">
	<table class="table table-hover " border="1px solid black" style=" margin-left:10px; margin-right:10px; margin-top: 10%; margin-bottom:10%;" >
	
	<tr style="color:green">
		<th>Id</th> 
		<th>Name</th> 
		<th>Price </th>
		<th> Code</th>
		<th>Status </th> 
		<th> Discount</th> 
		<th> Size</th>
		<th> Description</th> 
		<th>Image</th>  
	</tr>

		<tr style="padding:2px;">
			<td><?php echo $row['productID']; ?></h2>
			<td><?php echo $row['productName'];?></td>
			<td><?php echo $row['productPrice'];?></td>
			<td><?php echo $row['productCode'];?></td>
			<td><?php echo $row['productInStock'];?></td>
			<td><?php echo $row['productDiscount'];?></td>
			<td><?php echo $row['productSizes'];?> </td>
			<td><?php echo $row['productDetails'];?> </td> </h2>
			<td><img src="<?php echo $row['image'];?>" height="50" width="50"> </td>
		</tr>
		
		
	</table>
	</div>
		

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