<!DOCTYPE html>

<?php
	include_once 'C:\xampp\htdocs\CarRentalSystem\once.php';
	session_start();
	$email = $_SESSION['email'];
?>

<html lang="en">
	
<head>
	<meta charset="utf-8"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link href="Welcome admin.css" rel="stylesheet">
	<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/809/809998.png" type="image/x-icon">
	<title>Car Rental - Home (admin)</title>
</head>

<body>
	<nav class ="navbar">
		<div class="logo"><a href="#">Car Rental <i class="fas fa-car"></i></a></div>
		<div class="search-box">
			<input class="search-txt" type="text" name="" placeholder="Type to search">
			<a class="search-btn" href="#">
				<i class="fas fa-search"></i>
			</a>
		</div>
		<ul class="menu">
			<li><a href="#">Home</a></li>
			<li>
				<a href="#">Account</a>
				<ul class="dropdown">
					<li><a href="#">Manage your account</a></li>
					<li><a href="login.php">Log out</a></li>
				</ul>
			</li>
			<li><a href="#">About us</a></li>
		</ul>
		<div class="select">
			<select name="format" id="format">
				<option value="egy" selected>Egypt</option>
				<option value="usa">United States</option>
				<option value="ksa">Saudie Arabia</option>
			</select>
		</div>
	</nav>
	
	<section class="content">
		<div class="welcome"><p>Welcome Back <?php
												$query=mysqli_query($connect,"select admin_name from admin where Email = '$email'");
												$fetch = mysqli_fetch_assoc($query);
												echo $fetch['admin_name'];
											?>
							 </p>
		</div>
		<a href="#move1"><button>Edit Cars</button></a>
        <a href="#move2"><button>Edit officies</button></a>
        <a href="#move3"><button>Approve cars</button></a>
	</section>

	<h1 id="move1"></h1><br><br>
	<h1 class="pheading">Cars in the officies</h1>

	<section class="sec">
		<div class="car">

			<div class="card">
				<div class="img"><img src="https://www.iconeasy.com/icon/png/System/Delikate/Add.png" alt=""></div>
				<div class="box">
					<button class="btn0">Add car</button>
				</div>
			</div>
			<div class="card">
				<div class="img"><img src="https://images.prismic.io/carwow/c7c18949-7a17-4ec4-bc34-d0365c2027e7_2022+Audi+A3+Sportback+Front+3Q+Moving.jpg?fit=crop&q=60&w=1125&cs=tinysrgb&auto=format" alt=""></div>
				<div class="desc">Audi</div>
				<div class="title">A3</div>
                <div class="title">office 1</div>
				<div class="box">
					<div class="price">$400 per day</div>
					<a href="edit car.php"><button class="btn">Edit car</button></a>
				</div>
			</div>
		</div>
	</section>

	<h1 id="move2"></h1><br><br>
    <h1 class="pheading">Officies in the countries</h1>

	<section class="sec">
		<div class="car">

			<div class="card">
				<div class="img"><img src="https://www.iconeasy.com/icon/png/System/Delikate/Add.png" alt=""></div>
				<div class="box">
					<button class="btn0">Add office</button>
				</div>
			</div>

			<div class="card">
				<div class="img"><img src="https://images.olx.com.eg/thumbnails/43759412-800x600.webp" alt=""></div>
				<div class="desc">Egypt</div>
				<div class="title">Cairo</div>
                <div class="title">office 1</div>
				<div class="box">
					<a href="edit office.php"><button class="btn1">Edit office</button></a>
				</div>
			</div>
		</div>
	</section>

	<h1 id="move3"></h1><br><br>
    <h1 class="pheading">Reserved Cars by users</h1>

	<section class="sec">
		<div class="car">

        <div class="card">
				<div class="img"><img src="https://images.prismic.io/carwow/c7c18949-7a17-4ec4-bc34-d0365c2027e7_2022+Audi+A3+Sportback+Front+3Q+Moving.jpg?fit=crop&q=60&w=1125&cs=tinysrgb&auto=format" alt=""></div>
				<div class="desc">Audi</div>
				<div class="title">A3</div>
                <div class="title">office 1</div><br>
                <div class="price">$400 per day for 3 days</div>
				<div class="box">
					<button class="btn2">Approve</button>
                    <button class="btn3">Reject</button>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<p><a href="">Contact us</a></p>
	</footer>

<?php
	

?>
</body>
</html>