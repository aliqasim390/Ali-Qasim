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
				<img src="images/logo.jpg" alt="logo image"></a>
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
				</ul>
			</nav>
		</div>
		</div>
	</div>




<form method="POST" enctype="multipart/form-date" class="pwd1" >

    <div class="form-group">
      <label >PRODUCT NAME</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter name" name="name">
    </div>
<div class="form-group">
      <label >PRODUCT PRICE</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter price" name="price">
    </div>
<div class="form-group">
      <label >PRODUCT CODE</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter code" name="code">
    </div>
<div class="form-group">
      <label>PRODUCT INSTOCK</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter instock" name="instock">
    </div>
<div class="form-group">
      <label >PRODUCT DISCOUNT</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter discount" name="discount">
    </div>
<div class="form-group">
      <label >PRODUCT SIZE</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter size" name="size">
    </div>
<div class="form-group">
      <label >PRODUCT DETAIL</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter detail" name="detail">
    </div>
	
	<label>Select image to upload:</label>
  <input type="file" name="picture" ><br><br>
  <input type="submit" value="Upload" name="submit">
  
    </form>
</div>

<?php
	$dbcon = mysqli_connect('localhost','root','','weblabproject');
	
	if(isset($_POST['submit']))
	{
		$pname = $_POST['name'];
		$pprice = $_POST['price'];
		$pcode = $_POST['code'];
		$pstock = $_POST['instock'];
		$pdiscount = $_POST['discount'];
		$psize = $_POST['size'];
		$pdetail = $_POST['detail'];
		
		$file = $_FILES['picture'];
		$filename = $file['name'];
		$filepath = $file['tmp_name'];
	
		$target='uploads/'.$filename;
		move_uploaded_file($filepath,$target);
		$query = "insert into tblproducts values ('','$pname','$pprice','$pcode','$pstock','$pdiscount','$psize','$pdetail','$target')";
		
		$result  = mysqli_query($dbcon,$query);
	
		if($result)
			{
				echo "Data Sucessfully Registered";
				header('location: displayproducts.php');
			}
		else
			{
				echo "data not inserted";
			}	
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
				</ul>
			</div>
			
			<div class="footer-social-icons">
				<ul>
					<li><a target="_blank" href="https://www.facebook.com/"><img src="images/facebook.png"><alt="social media icons"></a></li>
					<li><a target="_blank" href="https://www.instagram.com/"><img src="images/instagram.png"><alt="social media icons"></a></li>
					<li><a target="_blank" href="https://www.twitter.com/"><img src="images/twitter.png"><alt="social media icons"></a></li>
					<li><a target="_blank" href="https://www.pinterest.com/"><img src="images/pinterest.png"><alt="social media icons"></a></li>
					<li><a target="_blank" href="https://www.linkedin.com/"><img src="images/linkedin.png"><alt="social media icons"></a></li>
				</ul>
			</div>

			<div style="color:#FFF; text-align:center">
				<p>© Copyright 2020 XYZLaptops.com - All Rights Reserved</p>
			</div>
		</footer>
	</div>




</body>
</html>