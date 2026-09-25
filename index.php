<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexphp</title>
</head>

<body>
    <form method="post">
        <label for="login">Login</label>
        <input type="text" id="login" name="Login">

        <label for="haslo">Haslo</label>
        <input type="password" name="Haslo" id="haslo">

        <button name="Button">button</button>

    </form>
    <?php
    session_start();
    if ($_POST["Login"] == "admin" && $_POST["Haslo"] == "tajne123") {
        header("location: panel.php");
        $_SESSION["user"] = "admin";
        $_SESSION["password"] = "tajne123";
        die();
    } else {
        echo "Błędny login lub hasło";
    }
    ?>
</body>

</html>
