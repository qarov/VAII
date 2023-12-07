<?php
global $spojenie;
include 'spojenie.php';
?>

<!DOCTYPE html>
<html lang="sk-SK">



<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>AutobazárPAMA</title>
</head>



<body>


    <header>
        <h1>Autobazár PAMA</h1>
        <p>Nájdite si svoje vysnívané auto</p>
    </header>

    <nav>
        <ul>
            <li><a href="o_nas.php">O nás</a></li>
            <li><a href="akopredatauto.php">Ako rýchlejšie predať auto</a></li>
            <li><a href="pridaj.php">Pridaj auto</a></li>
        </ul>
    </nav>

    <main>
        <h2>Najnovšia ponuka áut</h2>
        <div class="zoznam-aut">
            <?php
            $sql = "SELECT id, nazov, cena, odkaz FROM dbauta";
            $result = $spojenie->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) { ?>
                    <a href="zmaz.php?id=<?php echo $row['id']?>">
                        <div class="auto">
                             <img src="<?php echo $row["odkaz"] ?>" alt="">
                             <h3><?php echo $row["nazov"]?></h3>
                             <p>Cena: <?php echo $row["cena"]?> EUR</p>
                        </div>
                    </a>
                <?php }
            }
            ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 Môj výtvor</p>
    </footer>

</body>


</html>