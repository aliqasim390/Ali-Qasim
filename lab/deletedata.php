<?php

$dbcon = mysqli_connect('localhost','root','','weblabproject');

$id = $_GET['productID'];
$query = "delete from tblproducts where productID = $id";
mysqli_query($dbcon,$query);

header('Location: displayproducts.php');


?>