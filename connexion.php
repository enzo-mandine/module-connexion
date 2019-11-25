<?php
session_start();
if (isset($_POST["submit"])) {
    $admin = "admin";
    $connect = mysqli_connect("localhost", "root", "", "moduleconnexion");
    if (mysqli_connect_errno()) {
        echo "Failed to connect" . mysqli_connect_error();
    }
    $request = "SELECT login, password FROM utilisateurs WHERE login = '" . $_POST["login"] . "'";
    $query = mysqli_query($connect, $request);
    $result = mysqli_fetch_all($query);
    if (($_POST["login"] == $result[0][0]) && password_verify($_POST["password"], $result[0][1])) {
        $_SESSION["isconnected"] = $_POST["login"];
        if ($_POST["login"] == $admin) {
            header("location:admin.php");
        } else {
            header("location:userconnected.php");
        }
    } else {
        header("location:connexion.php");
        echo "<p>Failed to connect</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
</head>

<body id="login_body">
    <section id="module_login">
        <div class="alignh">
            <div id="userpic"></div>
        </div>
        <div class="alignh">
            <form class="alignv" method="POST" action="connexion.php">
                <input name="login" type="texte" placeholder="login" required>
                <br />
                <input name="password" type="password" placeholder="password" required>
                <br />
                <input name="submit" type="submit" value="connexion">
                <br />
            </form>
        </div>
        <div class="alignh">
            <a href="inscription.php">
                <input id="fix_login_inscription" type="submit" value="inscription">
            </a>
        </div>
    </section>
</body>
<footer id="index_footer">
    <p class="aligncenter">Copyright Laplateforme.io Mandine Enzo 2019</p>
</footer>

</html>