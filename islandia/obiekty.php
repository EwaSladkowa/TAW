<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islandia</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <aside>
        <h3>Do zwiedzania</h3>
        <ul>
            <li>Wodospady:</li>
            <ol>
                <?php
                $connection = mysqli_connect("localhost", "root", "", "islandia");
                $q1 = mysqli_query($connection, "SELECT obiekty.nazwa FROM `obiekty` WHERE panstwo LIKE 'Islandia' AND obiekty.idRodzaj = 10;");

                while ($a = mysqli_fetch_array($q1)) {
                    echo "<li>{$a['nazwa']}</li>";
                }
                ?>
            </ol>
            <li>Siedliska zwierząt:</li>
            <ol>
                <?php
                $q2 = mysqli_query($connection, "SELECT obiekty.nazwa FROM `obiekty` WHERE panstwo LIKE 'Islandia' AND obiekty.idRodzaj = 14;");

                while ($a1 = mysqli_fetch_array($q2)) {
                    echo "<li>{$a1['nazwa']}</li>";
                }
                ?>
            </ol>
        </ul>
    </aside>
    <header>
        <h1><a href="islandia.php">Zwiedzaj Islandię</a></h1>
    </header>
    <main>
        <h2>Opis miejsca</h2>
        <section>
            <?php
            $q4 = mysqli_query($connection, "SELECT `nazwa`, `opis`, `plik`, `nazwaCechy`, `wartoscCechy`, `rodzaj` FROM `obiekty`,`rodzaje` WHERE rodzaje.idRodzaj = obiekty.idRodzaj AND idObiekt = {$_GET['id']};");

                while ($a3 = mysqli_fetch_array($q4)) {
                    echo "<img src='{$a3['plik']}' alt='{$a3['nazwa']}'>";
                    echo "<h2>{$a3['nazwa']}</h2>";
                    echo "<h3>{$a3['rodzaj']}</h3>";
                    echo "<p>{$a3['nazwaCechy']}: {$a3['wartoscCechy']}</p>";
                    echo "<p>{$a3['opis']}</p>";
                }
            ?>
        </section>
    </main>
    <footer>
        <hr>
        <p>Autor: 000000000000</p>
    </footer>
</body>

</html>