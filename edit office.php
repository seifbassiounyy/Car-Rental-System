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

<?php
	include_once 'C:\xampp\htdocs\CarRentalSystem\once.php';
	session_start();
	$office = $_GET['office'];
    $query=mysqli_query($connect,"select * from office where Office_id = '$office'");
    $fetch = mysqli_fetch_assoc($query);

    $name = $fetch["Office_name"];
    $country = $fetch["Country"];
    $city = $fetch["City"];
    $address = $fetch["Address"];

    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $country = $_POST["country"];
        $city = $_POST["city"];
        $address = $_POST["address"];

		$temp = $connect->prepare("UPDATE office SET Office_name='$name',Country='$country',City='$city',office.Address='$address' WHERE Office_id='$office'");
		$temp->execute();
		header('location:welcome admin.php');
      }

?>

<body>
	<nav class ="navbar">
		<div class="logo"><a href="welcome admin.php">Car Rental <i class="fas fa-car"></i></a></div>
		<ul class="menu">
			<li><a href="welcome user.php">Home</a></li>
			<li><a href="">About us</a></li>
		</ul>
	</nav>

	<h1> Edit Office Details</h1>
	<form id="save" name="save" action="#" onsubmit="return validateForm()" method="post">
		<section class="content">
			<div class="specs">
				<div class="info">
					<p>Office Name:</p>
					<input type="text" class="form-control" name="name" id="name" value="<?= $name ?>"/>
				</div>
				<div class="info">
                    <p>Country:</p>
                    <?php if($country == 'egy'){ ?>
					<select name="country" id="country">
						<option value="egy" selected>Egypt</option>
						<option value="usa">United States</option>
						<option value="ksa">Saudie Arabia</option>
					</select>
                    <?php }elseif($country == 'usa') { ?>
                        <select name="country" id="country">
                            <option value="egy">Egypt</option>
                            <option value="usa" selected>United States</option>
                            <option value="ksa">Saudie Arabia</option>
                        </select>
                    <?php } elseif($country == 'ksa'){ ?>
                        <select name="country" id="country">
                            <option value="egy">Egypt</option>
                            <option value="usa" >United States</option>
                            <option value="ksa" selected>Saudie Arabia</option>
                        </select>
				    <?php } ?>
                </div>
				<div class="info">
					<p>City:</p>
					<input type="text" class="form-control" name="city" id="city" value="<?= $city ?>"/>
				</div>
				<div class="info">
					<p>Office Address:</p>
					<input type="text" class="form-control" name="address" id="address" value="<?= $address ?>"/>
				</div>
				</div>
				<div>
					<button type="submit" class="btn btn-larger btn-block" value='submit' name="submit">Save</button>
				</div>
			</div>
		</section>
	</form>
	

	<footer>
		<p><a href="">Contact us</a></p>
	</footer>
</body>
</html>