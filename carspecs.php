<!DOCTYPE html>

<?php
include_once 'C:\xampp\htdocs\CarRentalsYSTEM\once.php';
session_start();
$email = $_SESSION['email'];
?>

<html lang="en">
<head>
	<meta charset="utf-8"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link href="Carspecs.css" rel="stylesheet">
	<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/809/809998.png" type="image/x-icon">
	<title>Car Rental - Car Specs</title>
	<script src="https://kit.fontawesome.com/77fd9664d1.js" crossorigin="anonymous"></script>
</head>



<?php
	
	$plateid = $_GET['plate'];

	$sql = "SELECT * FROM car NATURAL JOIN office WHERE car.Plate_id='$plateid'";

	if ($result=$connect->query($sql))
		{
			if ($car = $result->fetch_assoc())
				{
					$picture = $car["Image"];
					$Brand = $car["Brand"];
					$Model = $car["Model"];
					$Year = $car["Year"];
					$Price_per_day = $car["Price_per_day"];
					$color = $car["Color"];
					$office = $car["Office_name"];
					$officeid = $car["Office_id"];
					$status = $car["Status"];
				}
		}
	
?>

<body>
	<nav class ="navbar">
		<div class="logo"><a href="welcome user.php">Car Rental <i class="fas fa-car"></i></a></div>
		<ul class="menu">
			<li><a href="welcome user.php">Home</a></li>
			<li>
				<a href="#">Account</a>
				<ul class="dropdown">
					<li><a href="manage.php">Manage your account</a></li>
					<li><a href="login.php">Log out</a></li>
				</ul>
			</li>
			<li><a href="#">About us</a></li>
		</ul>
	</nav>

	<h1> Car Specs</h1>

	<div class="card">
		<div class="img"><img src= <?= $picture ?> alt=""></div>
	</div>

	<div class="specs">

		<div class="ans"><span class="sort">Brand: </span> <?= $Brand ?></div><br>
		<div class="ans"><span class="sort">Model: </span> <?= $Model ?></div><br>
		<div class="ans"><span class="sort">Year: </span> <?= $Year ?></div><br>
		<div class="ans"><span class="sort">Color: </span> <?= $color ?></div><br>
		<div class="ans"><span class="sort">Price/Day: </span> <?= $Price_per_day ?></div><br>
		<div class="ans"><span class="sort">Status: </span> <?= $status ?></div><br>		
		<div class="ans"><span class="sort">Office Name: </span> <?= $office ?></div><br>	
		<div class="ans"><span class="sort">Office ID: </span> <?= $officeid ?></div><br>	
		<div class="ans"><span class="sort">Plate Number: </span> <?= $plateid ?></div><br>

	</div>

	<div>

		<?php
			$checkreserved="SELECT * FROM car WHERE Plate_id = '$plateid'";
			if ($result=$connect->query($checkreserved))
			{
				$row = $result->fetch_assoc();
				if ($row['Status']=="active")
				{
					?>
						<form method='POST' action=''>
						<button class="btn2" name=reserve type="submit"><span>Reserve</span></button>
						</form>
					<?php
				}

				else
				{
					?>
						<form method='POST' action=''>
						<button class="btn3" name=reserve type="submit" disabled><span>Reserve</span></button>
						</form>
					<?php
				}
			}
		?>

		<?php if(isset($_POST['reserve']))
		{
			$sql = "UPDATE car SET Status = 'reserved' WHERE Plate_id = '$plateid'";
				
			$result=$connect->query($sql);
			header("Location:welcome user.php");
			exit();
				
		}?>


		<?php

			$checkapproved="SELECT * FROM car WHERE Plate_id = '$plateid'";
			if ($result=$connect->query($checkapproved))
			{
				$row = $result->fetch_assoc();
				if ($row['Status']=="approved")
				{
					?>
						<form method="get" name="form" action="checkout.php">
						<button class="btn" name="plate2" type="submit" value=<?= $plateid ?> ><span> Pay </span></button>
						</form>
					<?php
				}

				else
				{
					?>
						<form method="get" name="form" action="checkout.php">
						<button class="btn1" name="plate2" type="submit" disabled value=<?= $plateid ?> ><span> Pay </span></button>
						</form>
					<?php
				}
			}
		?>

	</div>

	<footer>
		<p><a href="">Contact us</a></p>
	</footer>


</body>
</html>