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

	<h1> Edit Car Specs</h1>

	<section class="content">
		<div class="card">
			<div class="img"><img src="https://www.motortrend.com/uploads/2022/02/2022_Toyota_Avalon_Touring_001.jpg?fit=around%7C875:492.1875" alt=""></div>
		</div>

		<div class="specs">
			<div class="info">
				<p>Plate-ID:</p>
				<input type="text" class="form-control" name="plate" id="plate" value=""/>
			</div>
			<div class="info">
				<p>Color:</p>
				<input type="text" class="form-control" name="color" id="color" value=""/>
			</div>
			<div class="info">
				<p>Brand:</p>
				<input type="text" class="form-control" name="brand" id="brand" value=""/>
			</div>
			<div class="info">
				<p>Model:</p>
				<input type="text" class="form-control" name="model" id="model" value=""/>
			</div>
			<div class="info">
				<p>Price Per Day:</p>
				<input type="text" class="form-control" name="price" id="price" value=""/>
			</div>
			<br>
			<div class="info">
				<p>Status:</p>
				<select class="form-control" id="format1" name="country">
					<option value="active">Active</option>
					<option value="out">Out of service</option>
					<option value="rented">Rented</option>
				</select>
			</div>
			<br>
			<div class="info">
				<p>Year:</p>
				<input type="text" class="form-control" name="year" id="year" value=""/>
			</div>
			<div class="info">
				<p>Oficce ID:</p>
				<input type="text" class="form-control" name="office" id="office" value=""/>
			</div>
			<div class="info">
				<p>Image url:</p>
				<input type="text" class="form-control" name="image" id="image" value=""/>
			</div>
		</div>

		<div>
			<button1><span>Save</span></button1>
			<button2><span>Delete</span></button2>
		</div>
		
	</section>
	<footer>
		<p><a href="">Contact us</a></p>
	</footer>
</body>
</html>