<!DOCTYPE html>

<?php
include_once 'C:\xampp\htdocs\CarRentalsYSTEM\once.php';
session_start();
$email = $_SESSION['email'];
$currentDate = date("Y-m-d");
?>

<html lang="en">
<head>
	<meta charset="utf-8"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link href="advancedsearch.css" rel="stylesheet">
	<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/809/809998.png" type="image/x-icon">
	<title>Car Rental - Car Specs</title>
	<script src="https://kit.fontawesome.com/77fd9664d1.js" crossorigin="anonymous"></script>
</head>

<?php

    if ($_POST['search'] == 'car') 
    {
        if ( ! empty($_POST['advanced']))
        {
            $plateid = $_POST['advanced'];
            $sql = "SELECT * FROM car NATURAL JOIN office WHERE car.Plate_id ='$plateid'";
            $sql2 = "SELECT * FROM reservation  WHERE reservation.Plate_id = '$plateid' GROUP BY reservation.Plate_id, reservation.Entry_date";
        }
    
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
                    }
            }

    } else if ($_POST['search'] == 'customer') {
        if ( ! empty($_POST['advanced'])){
            $nationalid = $_POST['advanced'];
            $sql = "SELECT * FROM customer WHERE customer.national_id ='$nationalid'";
            $sql2 = "SELECT * FROM reservation  WHERE reservation.national_id = '$nationalid' GROUP BY reservation.national_id, reservation.Entry_date";
        }
    
        if ($result=$connect->query($sql))
            {
                if ($customer = $result->fetch_assoc())
                    {
                        $Fname = $customer["Fname"];
                        $Lname = $customer["Lname"];
                        $Email = $customer["Email"];
                        $phone = $customer["phone_number"];
                        $country = $customer["Country"];
                        $sex = $customer["Sex"];
                        $license = $customer["licence_id"];
                    }
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

	<h1> Advanced Search </h1>

	

    <?php

        if ($_POST['search'] == 'car')
        {
            ?>
                <div class="card">
                    <div class="img"><img src= <?= $picture ?> alt=""></div>
                </div>

                <div class="specs">
                    <div class="ans"><span class="sort">Brand: </span> <?= $Brand ?></div><br>
                    <div class="ans"><span class="sort">Model: </span> <?= $Model ?></div><br>
                    <div class="ans"><span class="sort">Year: </span> <?= $Year ?></div><br>
                    <div class="ans"><span class="sort">Color: </span> <?= $color ?></div><br>
                    <div class="ans"><span class="sort">Price/Day: </span> <?= $Price_per_day ?></div><br>
                    <div class="ans"><span class="sort">Office Name: </span> <?= $office ?></div><br>	
                    <div class="ans"><span class="sort">Office ID: </span> <?= $officeid ?></div><br>	
                    <div class="ans"><span class="sort">Plate Number: </span> <?= $plateid ?></div><br>
                </div>
            <?php

                if ($result2=$connect->query($sql2))
                {
                    if ($result2->num_rows > 0)
                    {
                        ?>

                        <table>
                        <tr>
                        <th>Reservation ID</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Entry Date</th>
                        <th>Action</th>
                        <th>Plate ID</th>
                        <th>National ID</th>
                        </tr>

                        <?php
                        while ($row = $result2->fetch_assoc())
                        {
                            echo "<tr><td>" . $row["Reservation_id"]. "</td><td>" . $row["Start_date"] . "</td><td>" . $row["End_date"] . "</td><td>" . $row["Entry_date"] . "</td><td>"
                            . $row["Action"] . "</td><td>" . $row["Plate_id"] . "</td><td>" . $row["national_id"] . "</td><td>";
                        }
                    }
                } 
        }
        elseif($_POST['search'] == 'customer')
        {
        ?>
            <div class="card">
            </div>
            <div class="specs">
                <div class="ans"><span class="sort">First Name: </span> <?= $Fname ?></div><br>
                <div class="ans"><span class="sort">Last Name: </span> <?= $Lname ?></div><br>
                <div class="ans"><span class="sort">National ID: </span> <?= $nationalid ?></div><br>
                <div class="ans"><span class="sort">Phone Number: </span> <?= $phone ?></div><br>
                <div class="ans"><span class="sort">Email: </span> <?= $Email ?></div><br>
                <div class="ans"><span class="sort">Country: </span> <?= $country ?></div><br>	
                <div class="ans"><span class="sort">Sex: </span> <?= $sex ?></div><br>	
                <div class="ans"><span class="sort">License ID: </span> <?= $license ?></div><br>
            </div>

        <?php

            if ($result2=$connect->query($sql2))
            {
                if ($result2->num_rows > 0)
                {
                    ?>

                    <table>
                    <tr>
                    <th>Reservation ID</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Entry Date</th>
                    <th>Action</th>
                    <th>Plate ID</th>
                    <th>National ID</th>
                    </tr>

                    <?php
                    while ($row = $result2->fetch_assoc())
                    {
                        echo "<tr><td>" . $row["Reservation_id"]. "</td><td>" . $row["Start_date"] . "</td><td>" . $row["End_date"] . "</td><td>" . $row["Entry_date"] . "</td><td>"
                        . $row["Action"] . "</td><td>" . $row["Plate_id"] . "</td><td>" . $row["national_id"] . "</td><td>";
                    }
                }
            } 
        }

        ?>
        </table>
	<div>



    


        
	<footer>
		<p><a href="">Contact us</a></p>
	</footer>


</body>
</html>
