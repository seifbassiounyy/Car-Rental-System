<!DOCTYPE html>
<html lang="en">

<?php
	$date = $_POST['date'];
?>

<head>
	<meta charset="utf-8"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link href="show status2.css" rel="stylesheet">
	<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/809/809998.png" type="image/x-icon">
	<title>Car Rental - Status</title>
	<script src="https://kit.fontawesome.com/77fd9664d1.js" crossorigin="anonymous"></script>
</head>

<?php
	include_once 'C:\xampp\htdocs\CarRentalSystem\once.php';
	session_start();
?>

<body>
	<nav class ="navbar">
		<div class="logo"><a href="welcome admin.php">Car Rental <i class="fas fa-car"></i></a></div>
		<ul class="menu">
			<li><a href="welcome admin.php">Home</a></li>
			<li><a href="">About us</a></li>
		</ul>
	</nav>

	<h1> Show Status </h1>
    
	<table>
	<tr>
	<th>Plate ID</th>
	<th>Status</th>
	</tr>
	<?php
    $sql = "SELECT car_status.Plate_id, car_status.`STATUS` FROM car_status WHERE car_status.`Date` = '$date'";
    $result = $connect->query($sql);

    /*$query = "SELECT Plate_id FROM car";
    $res = $connect->query($query);

    while($row1 = $res->fetch_assoc())
    {
        $status = 'Active';
        while($row = $result->fetch_assoc())
        {
            echo $row["Plate_id"];
            echo "  ";
            echo $row1['Plate_id'];
            echo "  ";
            if($row["Plate_id"] == $row1['Plate_id'])
            {
                $status = $row["STATUS"];
                //echo "<tr><td>" . $row1["Plate_id"]. "</td><td>" . $status . "</td><td>";
            }
            //echo "<tr><td>" . $row1["Plate_id"]. "</td><td>" . $status . "</td><td>";
        }
    }*/
	?>
	</table>
	
	<footer>
		<p><a href="">Contact us</a></p>
	</footer>
</body>

</html>