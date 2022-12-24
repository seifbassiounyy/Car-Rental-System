<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link href="carspecs.css" rel="stylesheet">
	<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/809/809998.png" type="image/x-icon">
	<title>Car Rental - Car Specs</title>
	<script src="https://kit.fontawesome.com/77fd9664d1.js" crossorigin="anonymous"></script>
</head>


<body>
	<nav class ="navbar">
		<div class="logo"><a href="welcome user.php">Car Rental <i class="fas fa-car"></i></a></div>
		<ul class="menu">
		<li><a href="welcome user.php">Home</a></li>
		<li>
			<a href="#">Account</a>
			<ul class="dropdown">
				<li><a href="#">Manage your account</a></li>
				<li><a href="login.php">Log out</a></li>
			</ul>
		</li>
		<li><a href="#">About us</a></li>
	</ul>
	</nav>

	<h1> Car Specs</h1>

	<div class="card">
		<div class="img"><img src="https://www.motortrend.com/uploads/2022/02/2022_Toyota_Avalon_Touring_001.jpg?fit=around%7C875:492.1875" alt=""></div>
	</div>

	<div class="specs">
		<div>
			<label class="sort">Brand:</label>
			<p class="ans">Mercedes-Benz</p>
		</div>
		<br>
		<div>
			<label class="sort">Model:</label>
			<p class="ans">A-class</p>
		</div>
		<br>
		<div>
			<label class="sort">Year:</label>
			<p class="ans">2020</p>
		</div>
		<br>
		<div>
			<label class="sort">Color:</label>
			<p class="ans">Red</p>
		</div>
		<br>
		<div>
			<label class="sort">Price Per Day:</label>
			<p class="ans">$500</p>
		</div>
		<br>
		<div>
			<label class="sort">Status:</label>
			<p class="ans">Active</p>
		</div>
		<br>
		<div>
			<label class="sort">Office Name:</label>
			<p class="ans">Office one</p>
		</div>
	</div>

	<div>
	<button1><span>Reserve</span></button1>
	<a href="checkout.php"><button2><span>Pay</span></button2></a>
	</div>

	<footer>
		<p><a href="">Contact us</a></p>
	</footer>
</body>
</html>