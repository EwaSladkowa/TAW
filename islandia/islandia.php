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
            <!--  AND obiekty.idRodzaj = 10 -->
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
        
        <h2>Galeria</h2>
        
        <section>
            <?php
            $q3 = mysqli_query($connection, "SELECT `idObiekt`, `nazwa` , `plik` FROM `obiekty` WHERE panstwo LIKE 'Islandia';");
                
                while ($a2 = mysqli_fetch_row($q3)) {
                    echo "<a href='obiekty.php?id={$a2[0]}'>
                    <img src='{$a2[2]}' alt='{$a2[1]}' title='{$a2[1]}' class='miniatury'>
                    </a>";
                }
            ?>
        </section>
    </main>
    <footer>
        <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSzkzzbCAzkVsfPP_jfIGUBMR5K64qW6FiK4-03YBv2ou2Spx7NC8p12MpRjAjDLBKjt4_D626ve7zwQWllqi1YB1jj-kZiPOdoe7jcQ&s=10" alt="kot" title="lel"> -->
        <hr>
        <p>Autor: 000000000000</p>
    </footer>
</body>

</html>