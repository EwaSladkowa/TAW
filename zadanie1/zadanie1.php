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
    $baza = "islandia";

    $dsm = "mysql:host=$localhost;dbname=$baza;charset=utf8mb4";
    try {
        // $connection = new mysqli($localhost, $root, $password, $baza);
        $pdo = new PDO($dsm, $root, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Could not connect. " . $e->getMessage());
    }
    try {
        $sql = "SELECT obiekty.nazwa FROM `obiekty` WHERE panstwo LIKE 'Islandia' AND obiekty.idRodzaj = 10;";
        $result = $pdo->query($sql);
        if ($result->rowCount() > 0) {
            while ($a = $result->fetch()) {
                echo "<li>{$a['nazwa']}</li>";
            }
        } else {
            echo "No records found.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $pdo = null;
    ?>
</body>

</html>