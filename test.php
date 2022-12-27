<!DOCTYPE html>

<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "car";
$output = '';
$connection = new mysqli($servername, $dbUsername, $dbPassword, $dbname); // connection to database
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error); // get out of code = return null
}
if (isset($_POST['search'])) {
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
    $query = mysqli_query($connection, "SELECT * FROM car WHERE brand LIKE '%$searchq%' OR model LIKE '%$searchq%' OR model_year LIKE '%$searchq%' OR color LIKE '%$searchq%'");
    $count = mysqli_num_rows($query);

    while ($row = mysqli_fetch_array($query)) {
        $brand = $row['brand'];
        $model = $row['model'];
        $model_year = $row['model_year'];
        $color = $row['color'];
        ?>
        <div>
            <div class="title">Brand: <?= $brand ?></div>
            <div class="title">Model: <?= $model ?></div>
            <div class="title">Year: <?= $model_year ?></div>
            <div class="title">Color: <?= $color ?> </div>
            <form method="get" name="form" action="">
            <button class="btn" name="plate" type="submit" value="<?= $row["7ot hna esm el esm 2le enta msme beh el plate id 3ndko fe table car"] ?>" > Reserve </button>
            </form>
        </div>
        <?php
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <form action ="test.php" method="post">
    <input type="text" name="search" placeholder="Search For Car" />
    <input type="submit" value ="search" />
</form>
</body>
</html>