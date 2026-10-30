<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $localhost = "localhost";
    $root = "root";
    $password = "";
    $baza = "szkola";
    $connection = new mysqli($localhost, $root, $password, $baza);
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    } else {
        echo "Connected successfully";
    }
    mysqli_close($connection);
    ?>
</body>

</html>