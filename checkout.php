<!DOCTYPE html>

<?php
include_once 'C:\xampp\htdocs\CarRentalSystem\once.php';
session_start();
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
	
	$plateid = $_GET['plate2'];

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


<script>
	function calculatePrice(priceperday)
	{
		var d1 = document.getElementById("pickup").value;
		var d2 = document.getElementById("return").value;
		var p = parseInt(priceperday);
		const dateOne = new Date(d1);
		const dateTwo = new Date(d2);
		const time = Math.abs(dateTwo - dateOne);
		const days = Math.ceil(time / (1000 * 60 * 60 * 24));
		const Price = days * p;
		document.getElementById("output").innerHTML=Price;
	}
	function validateForm(){
			var pickupDate= document.getElementById("pickupDate").value;
			var returnDate= document.getElementById("returnDate").value;
			if(pickupDate==document.getElementById("pickupDate").defaultValue){
				alert("You must enter a pick up date");
				return false;
			}
			else if(returnDate==document.getElementById("returnDate").defaultValue){
				alert("You must enter a return date");
				return false;
			}
		}
</script>

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
				<div class="info">
					<label class="sort">Pickup Date:</label><br>
					<input type="date" class="form-control" name="pickupDate" id="pickupDate"/>
				</div>
				<br>
				<div class="info">
					<label class="sort">Return Date:</label><br>
					<input type="date" class="form-control" name="returnDate" id="returnDate"/>
				</div>
				<div>
					<br><br><button3 onclick="calculatePrice(<?= $Price_per_day ?>)"><span>Calculate Total Price</span></button3><br><br>
					<label class="sort">Total Price:</label><br>
					<p class="ans">$<p class="ans" id="output"></p></p>
				</div>
			</div>
		</form>
	<div>


	<form method='POST' action='' onclick="print()">
	<button class="btn" name=pay type="submit" ><span>Confirm Payment</span></button>
	</form>

	<script>
	function print() {
	alert("Car Rented Successfully!");
	}
	</script>

	<?php if(isset($_POST['pay']))
		{
			$sql = "UPDATE car SET Status = 'rented' WHERE Plate_id = '$plateid'";
				
			$result=$connect->query($sql);
			
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