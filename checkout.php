<!DOCTYPE html>

<?php
include_once 'C:\xampp\htdocs\CarRentalSystem\once.php';
session_start();
$email = $_SESSION['email'];
$currentDate = date("Y-m-d");
?>

<html lang="en">
<head>
	<meta charset="utf-8"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link href="Checkout.css" rel="stylesheet">
	<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/809/809998.png" type="image/x-icon">
	<title>Car Rental - Checkout</title>
	<script src="https://kit.fontawesome.com/77fd9664d1.js" crossorigin="anonymous"></script>
</head>

<?php
	$query=mysqli_query($connect,"SELECT national_id FROM customer WHERE Email='$email'");
	$fetch = mysqli_fetch_assoc($query);
	$nationalID = $fetch['national_id'];

	$plateid = $_GET['plate2'];
	$totalPrice = "TEST";
	$pickupDate = "2023-05-05";
	$returnDate = "2023-05-08";

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
					$officeid = $car["Office_id"];
					$office = $car["Office_name"];
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

	<h1> Checkout</h1>

	<div class="card">
		<div class="img"><img src= <?= $picture ?> alt=""></div>
	</div>
		<form id="form" name="form" action="" onsubmit="return validateForm()" method="get">
			<div class="specs">
				<div class="ans"><span class="sort">Brand: </span> <?= $Brand ?></div><br>
				<div class="ans"><span class="sort">Model: </span> <?= $Model ?></div><br>
				<div class="ans"><span class="sort">Year: </span> <?= $Year ?></div><br>
				<div class="ans"><span class="sort">Price/Day: </span> <?= $Price_per_day ?></div><br>
				<div class="ans"><span class="sort">Office Name: </span> <?= $office ?></div><br>	
				<div class="ans"><span class="sort">Office ID: </span> <?= $officeid ?></div><br>	
				<div class="ans"><span class="sort">Plate Number: </span> <?= $plateid ?></div><br><br>
				<div class="ans"><span class="sort">Total Price: </span> <?= $totalPrice ?></div><br><br>
				<div class="ans"><span class="sort">Pickup Date: </span> <?= $pickupDate ?></div><br><br>
				<div class="ans"><span class="sort">Return Date: </span> <?= $returnDate ?></div><br><br>
			</div>
		</form>
	<div>


	<form method='POST' action='' onclick="print()">
	<button class="btn" name=pay type="submit" ><span>Confirm Payment</span></button>
	</form>

	<script>
	function print()
	{
		alert("Car Rented Successfully!");
	}
	</script>

	<?php if(isset($_POST['pay']))
		{
			$sql = "UPDATE reservation SET reservation.Action = 'Paid' WHERE Plate_id = '$plateid' AND national_id = $nationalID AND reservation.Action = 'Approved'";
			$result=$connect->query($sql);

			while($pickupDate <= $returnDate)
			{
				$sql = "INSERT INTO car_status (car_status.Plate_id,car_status.Date,car_status.STATUS) VALUES ($plateid,'$pickupDate','Rented')";
				$result=$connect->query($sql);
				$pickupDate = strtotime("+1 day", strtotime("$pickupDate"));
				$pickupDate = date("Y-m-d",$pickupDate);
			}

			header("Location:welcome user.php");
			exit();
		}
	?>


	<button2 onclick="location.href = 'welcome user.php';"><span>Cancel</span></button2>
	</div>

	<footer>
		<p><a href="">Contact us</a></p>
	</footer>
</body>
</html>