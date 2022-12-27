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
	<link href="welcome admin.css" rel="stylesheet">
	<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/809/809998.png" type="image/x-icon">
	<title>Car Rental - Home (admin)</title>
</head>

<body>
	<nav class ="navbar">
		<div class="logo"><a href="#">Car Rental <i class="fas fa-car"></i></a></div>
		<div class="search-box">
			<form  method="POST" name="form2" action="">
				<input class="search-txt" type="text" name="name" placeholder="Type to search">
				<button  class="search-btn" name="searchh" type="submit">
					<i class="fas fa-search"></i>
				</button>
			</form>
		</div>
		<ul class="menu">
			<li><a href="#">Home</a></li>
			<li>
				<a href="#">Account</a>
				<ul class="dropdown">
					<li><a href="login.php">Log out</a></li>
				</ul>
			</li>
			<li><a href="#">About us</a></li>
		</ul>
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
					<a href="add car.php"><button class="btn0">Add car</button></a>
				</div>
			</div>
			<?php

				$conn = new mysqli($servername, $username, $password, $dbname);
				
				if($conn->connect_error)
				{
					
					die("Connection failed: " . $conn->connect_error);
				}

				//$selectOption = $_POST['countries'];
				
				$sql = "SELECT * FROM car NATURAL JOIN office";
				
				
				if ($result=$conn->query($sql))
				{
					while($row = $result->fetch_assoc())
					{
						$picture = $row["Image"];
						$Brand = $row["Brand"];
						$Model = $row["Model"];
						$Year = $row["Year"];
						$office = $row["Office_name"];
						$Price_per_day = $row["Price_per_day"];
						?>
						<div class="card">
							<div class="img"><img src= <?= $picture ?> alt=""></div>
							<div class="desc">Brand: <?= $Brand ?></div>
							<div class="title">Model: <?= $Model ?></div>
							<div class="year">Year: <?= $Year ?></div>
							<div class="office">Office: <?= $office ?></div>
							<div class="box">
								<div class="price"><?=  $Price_per_day ?></div>
								<form method="get" name="form" action="edit car.php">
									<button class="btn" name="plate" type="submit" value=<?= $row["Plate_id"] ?> > Edit Car </button>
								</form>
							</div>
						</div>
						<?php
					}
					
					$result->free();
				}

			?>
		</div>
	</section>

	<h1 id="move2"></h1><br><br>
    <h1 class="pheading">Officies in the countries</h1>

	<section class="sec">
		<div class="car">

			<div class="card">
				<div class="img"><img src="https://www.iconeasy.com/icon/png/System/Delikate/Add.png" alt=""></div>
				<div class="box">
					<a href="add office.php"><button class="btn0">Add office</button></a>
				</div>
			</div>

			
			<?php

				$conn = new mysqli($servername, $username, $password, $dbname);
				
				if($conn->connect_error)
				{
					
					die("Connection failed: " . $conn->connect_error);
				}
				
				$sql = " SELECT * FROM office";
				
				if ($result=$conn->query($sql))
				{

					while($row = $result->fetch_assoc())
					{
						$officeid = $row["Office_id"];
						$officename = $row["Office_name"];
						$officecountry = $row["Country"];
						$officecity = $row["City"];
						$officeaddress = $row["Address"];
						?>

						<div class="card">
							<div class="img"><img src="https://images.olx.com.eg/thumbnails/43759412-800x600.webp" alt=""></div>
							<div class="desc">Office ID: <?= $officeid ?></div>
							<div class="title">Office Name: <?= $officename ?></div>
							<div class="title">City: <?= $officecity ?></div>
							<div class="title">Address: <?= $officeaddress ?></div>

							<div class="box">
								<form method="get" name="form" action="edit office.php">
									<button class="btn" name="office" type="submit" value=<?= $officeid ?> > Edit Office </button>
								</form>
							</div>
						</div>

						<?php
					}
					
					$result->free();
				}

			?>

		</div>
	</section>

	<h1 id="move3"></h1><br><br>
    <h1 class="pheading">Reserved Cars by users</h1>

	<section class="sec">
		<div class="car">

      
		

		<?php

				$conn = new mysqli($servername, $username, $password, $dbname);
				
				if($conn->connect_error)
				{
					
					die("Connection failed: " . $conn->connect_error);
				}
				
				$sql = " SELECT * FROM car NATURAL JOIN office WHERE car.Status = 'reserved' ";
				
				
				if ($result=$conn->query($sql))
				{
					while($row = $result->fetch_assoc())
					{
						
						$respicture = $row["Image"];
						$resBrand = $row["Brand"];
						$resModel = $row["Model"];
						$resYear = $row["Year"];
						$resoffice = $row["Office_name"];
						$resPrice_per_day = $row["Price_per_day"];

						?>

						<div class="card">
							<div class="img"><img src= <?= $respicture ?> alt=""></div>
							<div class="desc">Brand: <?= $resBrand ?></div>
							<div class="title">Model: <?= $resModel ?></div>
							<div class="year">Year: <?= $resYear ?></div>
							<div class="office">Office: <?= $resoffice ?></div>
							<div class="price">Price/Day: <?=  $resPrice_per_day ?></div>
							<div class="box">
							</div>
								<div class="box">
									<form method="get" name="form">
										<button class="btn2" name="approve" type="submit" value=<?= $row["Plate_id"] ?> > Approve </button>
										<button class="btn3" name="reject" type="submit" value=<?= $row["Plate_id"] ?> > Reject </button>
									</form>
								</div>
							</div>

						<?php
					}
					
					$result->free();
				}

			?>
		</div>
	</section>

	<footer>
		<p><a href="">Contact us</a></p>
	</footer>

<?php
	if (isset($_GET["approve"])) {
		$plate = $_GET["approve"];
		$temp = $connect->prepare("UPDATE car SET car.Status='approved' WHERE Plate_id='$plate'");
		$temp->execute();
		header('location:welcome admin.php');
		}

	if (isset($_GET["reject"])) {
		$plate = $_GET["reject"];
		$temp = $connect->prepare("UPDATE car SET car.Status='active' WHERE Plate_id='$plate'");
		$temp->execute();
		header('location:welcome admin.php');
	}
?>
</body>
</html>