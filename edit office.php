<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link href="edit office.css" rel="stylesheet">
	<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/809/809998.png" type="image/x-icon">
	<title>Car Rental - edit office</title>
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

	<h1> Edit Office Details</h1>
	<section class="content">
		<div class="specs">
			<div class="info">
				<p>Office ID::</p>
				<input type="text" class="form-control" name="ID" id="ID" value=""/>
			</div>
			<div class="info">
				<p>Office Name:</p>
				<input type="text" class="form-control" name="name" id="name" value=""/>
			</div>
			<div class="info">
				<p>Country:</p>
				<select class="form-control" id="format1" name="country">
					<option value="egy">Egypt</option>
					<option value="usa">United States</option>
					<option value="ksa">Saudi Arabia</option>
				</select>
			</div>
			<div class="info">
				<p>City:</p>
				<input type="text" class="form-control" name="city" id="city" value=""/>
			</div>
			<div class="info">
				<p>Office Address:</p>
				<input type="text" class="form-control" name="price" id="price" value=""/>
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