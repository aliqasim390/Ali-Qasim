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



<br>

<div class="container">
<p class=" sm-4">
<label class="text-center text-dark" >Add product: </label> 
<button class="btn btn-success" style="background-color:black"><a href="addproduct.php" class="text-white"> Add New product</a></button></p>

<div class=" col-sm-12 m-auto">
<table border="2px solid black" class="table table-bordered ">



<tr style="color: green">
<th>Id</th> 
<th>Name</th> 
<th>Price </th>
<th> Code</th>
<th>Status </th> 
<th> Discount</th> 
<th> Size</th>
<th> Description</th> 
<th>Image</th> 
<th>Delete </th> 
<th>Update </th> 
  
</tr>
<?php
	$dbcon = mysqli_connect('localhost','root','','weblabproject');
 
	$query = "select * from tblproducts";
	$res=mysqli_query($dbcon,$query);
 
while($row=mysqli_fetch_array($res))
{
?>

<tr>
<td><?php echo $row['productID']; ?></td> 
<td><?php echo $row['productName'];?> </td> 
<td><?php echo $row['productPrice'];?> </td> 
<td><?php echo $row['productCode'];?> </td> 
<td><?php echo $row['productInStock'];?> </td> 
<td><?php echo $row['productDiscount'];?> </td> 
<td><?php echo $row['productSizes'];?> </td> 
<td><?php echo $row['productDetails'];?> </td> 
<td>	<img src="<?php echo $row['image'];?>" height="50" width="100"> </td> 
<td>  <button class="btn btn-danger " style="background-color:black;" ><a href="deletedata.php?productID=<?php echo $row['productID'];?>" class="text-white">Delete</a></button></td>
<td>  <button class="btn btn-success " style="background-color:black;" ><a href="updatadata.php?productID=<?php echo $row['productID'];?>" class="text-white">Update</a></button></td>

</tr>

<?php
}
?>



</table>
  
</div>
</div>


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