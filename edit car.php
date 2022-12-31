<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link href="edit car.css" rel="stylesheet">
	<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/809/809998.png" type="image/x-icon">
	<title>Car Rental - edit car</title>
	<script src="https://kit.fontawesome.com/77fd9664d1.js" crossorigin="anonymous"></script>
</head>

<?php
	include_once 'C:\xampp\htdocs\CarRentalSystem\once.php';
	session_start();
	$plate = $_GET['plate'];
    $query=mysqli_query($connect,"select * from car where Plate_id = '$plate'");
    $fetch = mysqli_fetch_assoc($query);

    $color = $fetch["Color"];
    $brand = $fetch["Brand"];
    $model = $fetch["Model"];
	$price = $fetch["Price_per_day"];
    $year = $fetch["Year"];
	$image = $fetch["Image"];
    if (isset($_POST["submit1"])) {
        $color = $_POST["color"];
		$brand = $_POST["brand"];
		$model = $_POST["model"];
		$price = $_POST["price"];
		$status = $_POST["status"];
		$year = $_POST["year"];
		$image = $_POST["image"];

		$temp = $connect->prepare("UPDATE car SET Color='$color',Brand='$brand',Model='$model',Price_per_day='$price',car.Status='$status',car.Year='$year',car.Image='$image' WHERE Plate_id='$plate'");
		$temp->execute();
		header('location:welcome admin.php');
      }

	if (isset($_POST["submit2"])) {
		$temp = $connect->prepare("DELETE FROM car WHERE Plate_id='$plate'");
		$temp->execute();
		header('location:welcome admin.php');
	}

?>

<body>
	<nav class ="navbar">
		<div class="logo"><a href="welcome admin.php">Car Rental <i class="fas fa-car"></i></a></div>
		<ul class="menu">
			<li><a href="welcome admin.php">Home</a></li>
			<li><a href="">About us</a></li>
		</ul>
	</nav>

	<h1> Edit Car Specs</h1>
	<form id="save" name="save" action="#" onsubmit="return validateForm()" method="post">
		<section class="content">

			<div class="card">
				<div class="img"><img src="<?= $image ?>" alt=""></div>
			</div>
			<div class="specs">
				<div class="info">
					<p>Color:</p>
					<input type="text" class="form-control" name="color" id="color" value="<?= $color ?>"/>
				</div>
				<div class="info">
					<p>Brand:</p>
					<input type="text" class="form-control" name="brand" id="brand" value="<?= $brand ?>"/>
				</div>
				<div class="info">
					<p>Model:</p>
					<input type="text" class="form-control" name="model" id="model" value="<?= $model ?>"/>
				</div>
				<div class="info">
					<p>Price Per Day:</p>
					<input type="text" class="form-control" name="price" id="price" value="<?= $price ?>"/>
				</div>
				<div class="info">
					<p>Year:</p>
					<input type="text" class="form-control" name="year" id="year" value="<?= $year ?>"/>
				</div>
				<div class="info">
					<p>Image url:</p>
					<input type="text" class="form-control" name="image" id="image" value="<?= $image ?>"/>
				</div>
			</div>

			<div>
				<button type="submit" class="btn btn-larger btn-block" value='submit1' name="submit1">Save</button>
				<button type="submit" class="btn btn-larger btn-block" value='submit2' name="submit2">Delete</button>
			</div>
		</section>
	</form>
	<footer>
		<p><a href="">Contact us</a></p>
	</footer>
</body>
</html>