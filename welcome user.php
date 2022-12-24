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
	<link href="Welcome user.css" rel="stylesheet">
	<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/809/809998.png" type="image/x-icon">
	<title>Car Rental - Home</title>
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
		<?php
					$query=mysqli_query($connect,"select Country from customer where Email = '$email'");
					$fetch = mysqli_fetch_assoc($query);
       				$country = $fetch['Country'];
					if($country == 'egy')
					{
	              		 echo '<select name="format" id="format">
								<option value="egy" selected>Egypt</option>
								<option value="usa">United States</option>
								<option value="ksa">Saudie Arabia</option>
							  </select>';
					}
					else if($country == 'usa')
					{
	        			echo '<select name="format" id="format">
								<option value="egy">Egypt</option>
								<option value="usa" selected>United States</option>
								<option value="ksa">Saudie Arabia</option>
							  </select>';
					}
					else if($country == 'ksa')
					{
	        			echo '<select name="format" id="format">
								<option value="egy">Egypt</option>
								<option value="usa" selected>United States</option>
								<option value="ksa" selected>Saudie Arabia</option>
							  </select>';
					}
				?>
		</div>
	</nav>
	
	<section class="content">
		<div class="welcome"><p>Hello <?php
										$query=mysqli_query($connect,"select Fname from customer where Email = '$email'");
										$fetch = mysqli_fetch_assoc($query);
										echo $fetch['Fname'];
									?>
							</p>
		</div>
		<h1>Rent the best cars in the city now!!</h1>
		<p>Rent the suitable car for you now with the best price in the city.</p>
		<a href="#move"><button>Rent Now</button></a>
	</section>

	<h1 id="move"></h1><br><br>
	<h1 class="pheading">Availabe cars in your country</h1>

	<section class="sec">
		<div class="car">
			<?php
				$query=mysqli_query($connect,"select Plate_id from car as c WHERE c.Office_id in (SELECT Office_id FROM Office as o WHERE o.Country = '$country' )");
				while($fetch = mysqli_fetch_assoc($query))
				{
	            	$Plate_id = $fetch['Plate_id'];
					$query=mysqli_query($connect,"select * from car where Plate_id = '$Plate_id'");
					$fetch = mysqli_fetch_assoc($query);
					$color = $fetch['Color'];
					$brand = $fetch['Brand'];
					$model = $fetch['Model'];
					$price = $fetch['Price_per_day'];
					$office = $fetch['Office_id'];
					$status = $fetch['Status'];
					$image = $fetch['Image'];
					echo '<div class="card">
						<div class="img"><img src="'.$image.'" alt=""></div>
						<div class="desc">'.$brand.'</div>
						<div class="desc">'.$model.'</div>
						<div class="title">'.$color.'</div>
						<div class="title">'.$office.'</div>
						<div class="box">
						<div class="price">$'.$price.'</div>
						<a href="carspecs.php"><button class="btn">Rent Now</button></a>
						</div>';
				}
			?>
			<!--<div class="card">
				<div class="img"><img src="https://img-ik.cars.co.za/news-site-za/images/2022/06/a45-dyn.jpg?tr=h-347%2Cw-617" alt=""></div>
				<div class="desc">Mercedes-Benz</div>
				<div class="title">A-class</div>
				<div class="box">
					<div class="price">$500 per day</div>
					<button class="btn">Rent Now</button>
				</div>
			</div>

			<div class="card">
				<div class="img"><img src="https://images.prismic.io/carwow/c7c18949-7a17-4ec4-bc34-d0365c2027e7_2022+Audi+A3+Sportback+Front+3Q+Moving.jpg?fit=crop&q=60&w=1125&cs=tinysrgb&auto=format" alt=""></div>
				<div class="desc">Audi</div>
				<div class="title">A3</div>
				<div class="box">
					<div class="price">$400 per day</div>
					<button class="btn">Rent Now</button>
				</div>
			</div>

			<div class="card">
				<div class="img"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Nissan_Ariya%2C_left_front%2C_Nissan_Gallery_HQ%2C_2021.jpg/1920px-Nissan_Ariya%2C_left_front%2C_Nissan_Gallery_HQ%2C_2021.jpg" alt=""></div>
				<div class="desc">Nissan</div>
				<div class="title">Ariya</div>
				<div class="box">
					<div class="price">$350 per day</div>
					<button class="btn">Rent Now</button>
				</div>
			</div>

			<div class="card">
				<div class="img"><img src="https://www.motortrend.com/uploads/2022/02/2022_Toyota_Avalon_Touring_001.jpg?fit=around%7C875:492.1875" alt=""></div>
				<div class="desc">Toyota</div>
				<div class="title">Avalon</div>
				<div class="box">
					<div class="price">$500 per day</div>
					<button class="btn">Rent Now</button>
				</div>
			</div>

			<div class="card">
				<div class="img"><img src="https://img-ik.cars.co.za/news-site-za/images/2022/06/a45-dyn.jpg?tr=h-347%2Cw-617" alt=""></div>
				<div class="desc">Mercedes-Benz</div>
				<div class="title">A-class</div>
				<div class="box">
					<div class="price">$500 per day</div>
					<button class="btn">Rent Now</button>
				</div>
			</div>

			<div class="card">
				<div class="img"><img src="https://images.prismic.io/carwow/c7c18949-7a17-4ec4-bc34-d0365c2027e7_2022+Audi+A3+Sportback+Front+3Q+Moving.jpg?fit=crop&q=60&w=1125&cs=tinysrgb&auto=format" alt=""></div>
				<div class="desc">Audi</div>
				<div class="title">A3</div>
				<div class="box">
					<div class="price">$400 per day</div>
					<button class="btn">Rent Now</button>
				</div>
			</div>

			<div class="card">
				<div class="img"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Nissan_Ariya%2C_left_front%2C_Nissan_Gallery_HQ%2C_2021.jpg/1920px-Nissan_Ariya%2C_left_front%2C_Nissan_Gallery_HQ%2C_2021.jpg" alt=""></div>
				<div class="desc">Nissan</div>
				<div class="title">Ariya</div>
				<div class="box">
					<div class="price">$350 per day</div>
					<button class="btn">Rent Now</button>
				</div>
			</div>

			<div class="card">
				<div class="img"><img src="https://www.motortrend.com/uploads/2022/02/2022_Toyota_Avalon_Touring_001.jpg?fit=around%7C875:492.1875" alt=""></div>
				<div class="desc">Toyota</div>
				<div class="title">Avalon</div>
				<div class="box">
					<div class="price">$500 per day</div>
					<button class="btn">Rent Now</button>
				</div>
			</div>

			<div class="card">
				<div class="img"><img src="https://img-ik.cars.co.za/news-site-za/images/2022/06/a45-dyn.jpg?tr=h-347%2Cw-617" alt=""></div>
				<div class="desc">Mercedes-Benz</div>
				<div class="title">A-class</div>
				<div class="box">
					<div class="price">$500 per day</div>
					<button class="btn">Rent Now</button>
				</div>
			</div>

			<div class="card">
				<div class="img"><img src="https://images.prismic.io/carwow/c7c18949-7a17-4ec4-bc34-d0365c2027e7_2022+Audi+A3+Sportback+Front+3Q+Moving.jpg?fit=crop&q=60&w=1125&cs=tinysrgb&auto=format" alt=""></div>
				<div class="desc">Audi</div>
				<div class="title">A3</div>
				<div class="box">
					<div class="price">$400 per day</div>
					<button class="btn">Rent Now</button>
				</div>
			</div>

			<div class="card">
				<div class="img"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Nissan_Ariya%2C_left_front%2C_Nissan_Gallery_HQ%2C_2021.jpg/1920px-Nissan_Ariya%2C_left_front%2C_Nissan_Gallery_HQ%2C_2021.jpg" alt=""></div>
				<div class="desc">Nissan</div>
				<div class="title">Ariya</div>
				<div class="box">
					<div class="price">$350 per day</div>
					<button class="btn">Rent Now</button>
				</div>
			</div>

			<div class="card">
				<div class="img"><img src="https://www.motortrend.com/uploads/2022/02/2022_Toyota_Avalon_Touring_001.jpg?fit=around%7C875:492.1875" alt=""></div>
				<div class="desc">Toyota</div>
				<div class="title">Avalon</div>
				<div class="box">
					<div class="price">$500 per day</div>
					<button class="btn">Rent Now</button>
				</div>
			</div>

			<div class="card">
				<div class="img"><img src="https://img-ik.cars.co.za/news-site-za/images/2022/06/a45-dyn.jpg?tr=h-347%2Cw-617" alt=""></div>
				<div class="desc">Mercedes-Benz</div>
				<div class="title">A-class</div>
				<div class="box">
					<div class="price">$500 per day</div>
					<button class="btn">Rent Now</button>
				</div>
			</div>

			<div class="card">
				<div class="img"><img src="https://images.prismic.io/carwow/c7c18949-7a17-4ec4-bc34-d0365c2027e7_2022+Audi+A3+Sportback+Front+3Q+Moving.jpg?fit=crop&q=60&w=1125&cs=tinysrgb&auto=format" alt=""></div>
				<div class="desc">Audi</div>
				<div class="title">A3</div>
				<div class="box">
					<div class="price">$400 per day</div>
					<button class="btn">Rent Now</button>
				</div>
			</div>

			<div class="card">
				<div class="img"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Nissan_Ariya%2C_left_front%2C_Nissan_Gallery_HQ%2C_2021.jpg/1920px-Nissan_Ariya%2C_left_front%2C_Nissan_Gallery_HQ%2C_2021.jpg" alt=""></div>
				<div class="desc">Nissan</div>
				<div class="title">Ariya</div>
				<div class="box">
					<div class="price">$350 per day</div>
					<button class="btn">Rent Now</button>
				</div>
			</div>

			<div class="card">
				<div class="img"><img src="https://www.motortrend.com/uploads/2022/02/2022_Toyota_Avalon_Touring_001.jpg?fit=around%7C875:492.1875" alt=""></div>
				<div class="desc">Toyota</div>
				<div class="title">Avalon</div>
				<div class="box">
					<div class="price">$500 per day</div>
					<button class="btn">Rent Now</button>
				</div>
			</div>-->
		</div>
	</section>

	<footer>
		<p><a href="">Contact us</a></p>
	</footer>
</body>
</html>