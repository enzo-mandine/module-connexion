<?php
session_start();
if (isset($_GET["logout"])) {
    session_destroy();
    header("location:index.php");
}
if (!isset($_SESSION["isconnected"])) {
    header("location:index.php");
    die;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="style.css">
</head>

<body id="index_body">
    <main id="index_main">
        <p id="intro">Bienvenue <?php echo $_SESSION["isconnected"] ?></p>
        <div id="index_continue">
            <a href="profil.php">
                <input type="submit" name="profil" value="Modifier son profil">
            </a>
            <a href="userconnected.php?logout=true">
                <input type="submit" name="logout" value="Deconnexion">
            </a>
        </div>
    </main>
    <footer id="index_footer">
        <p class="aligncenter">Copyright Laplateforme.io Mandine Enzo 2019</p>
    </footer>
</body>

</html>