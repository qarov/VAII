<?php
global $spojenie;
include 'spojenie.php';

if(isset($_POST['submit'])) {
    $nazov=$_POST['nazov'];
    $cena=$_POST['cena'];
    $odkaz=$_POST['odkaz'];

    $sql="INSERT INTO dbauta(nazov, cena, odkaz) VALUES('$nazov', '$cena', '$odkaz')";
    $result=mysqli_query($spojenie,$sql);
    if ($result) {
        header("Location: index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="sk-SK">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Pridaj</title>
</head>



<body>

    <header>
        <h1>Pridaj ponuku</h1>
    </header>

    <main>
        <div class="container my-5">
            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Názov auta</label>
                    <input type="text" class="form-control" name="nazov">
                </div>
                <div class="mb-3">
                    <label class="form-label">Cena</label>
                    <input type="text" class="form-control" name="cena">
                </div>
                <div class="mb-3">
                    <label class="form-label">Link</label>
                    <input type="text" class="form-control" name="odkaz">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Nahraj</button>
            </form>
        </div>
    </main>

    <nav>
        <ul>
            <li><a href="index.php">Domov</a></li>
        </ul>
    </nav>

    <footer>
        <p>&copy; 2023 Môj výtvor</p>
    </footer>

</body>


</html>