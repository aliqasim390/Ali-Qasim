<html>
<body>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="form.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Sample Website</title>
	<style>
	label{
		border: 2px solid black;
		background-color: green;
		color:white;
		border-radius:4px;
		padding:4px;
	}
	#aa{
	border: 2px solid black;
		background-color: green;
		color:white;
		border-radius:4px;
		padding:4px;
	}
	</style>
</head>

<body>

	<div class="row"  style="background-color:black;">
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
			<nav  style="background-color:dimgrey;">
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


<div class="container" style="margin-top:5%;">
<form method="post" enctype="multipart/form-data" class="bold">
  
    
    <div class="form-group">
      <label>Product Name</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter name" name="name">
    </div>
<div class="form-group">
      <label>Product Price </label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter price" name="price">
    </div>
<div class="form-group">
      <label>Product Code</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter code" name="code">
    </div>
<div class="form-group">
      <label>Product in Stock</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter instock" name="instock">
    </div>
<div class="form-group">
      <label>Product Discount</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter discount" name="discount">
    </div>
<div class="form-group">
      <label>Product Size</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter size" name="size">
    </div>
<div class="form-group">
      <label>Product Detail</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter detail" name="detail">
    </div>

  Select image to upload:
  <input id="aa" type="file" name="file" id="fileToUpload">
  <br>
  <input id="aa" type="submit" value="Add product" name="submit">
    </form>

    
    
  </div>
<?php

if(isset($_POST['submit']))
{
	 
	$pname = $_POST['name'];
	$pprice = $_POST['price'];
	$pcode = $_POST['code'];
	$pstock = $_POST['instock'];
	$pdiscount = $_POST['discount'];
	$psize = $_POST['size'];
	$pdetail = $_POST['detail'];
	$file = $_FILES['file'];
	$filename = $file['name'];
	$filepath = $file['tmp_name'];
	
	$dest='uploads/'.$filename;
	move_uploaded_file($filepath,$dest);
	$databaseHost = 'localhost';
$databaseName = 'weblabproject';
$databaseUsername = 'root';
$databasePassword = '';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
	$query="INSERT INTO tblproducts VALUES ('','$pname','$pprice','$pcode','$pstock','$pdiscount','$psize','$pdetail','$dest')";
	$res=mysqli_query($conn,$query);
	
	if($res)
	{
		echo "Data is successfully registered";
		header('Location: displayproducts.php');
	}
	else{
		echo "Data is not registered";
	}
	
	
}
?>


	<div class="row">
		<footer  style="background-color:dimgrey;">
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

