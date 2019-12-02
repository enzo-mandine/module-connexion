<?php
session_start();
if (!isset($_SESSION["isconnected"])) {
    header("location:index.php");
    die;
}
$login = mysqli_connect("localhost", "root", "", "moduleconnexion");
$request = "SELECT * FROM `utilisateurs`WHERE login = '" . $_SESSION["isconnected"] . "'";
$query = mysqli_query($login, $request);
$result = mysqli_fetch_all($query);
foreach ($result as $row)

    if (isset($_POST["submit"])) {
        if ($_POST["password"] == $_POST["passwordconfirm"]) {
            $editrequest = "UPDATE utilisateurs SET nom = '" . $_POST["nom"] . "', prenom = '" . $_POST["prenom"] . "', login = '" . $_POST["login"] . "', password = '" . password_hash($_POST["password"], PASSWORD_DEFAULT) . "' WHERE login = '" . $row[1] . "'";
            mysqli_query($login, $editrequest);
            mysqli_close($login);
            header("location:userconnected.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body id="profil_body">
    <main id="register_main">
        <section id="module_signin">
            <p id="register_p">Envie de changement ?<br />C'est par ici :</p>
            <form method="POST" action="">
                <input class="alignh input_width" name="nom" type="texte" placeholder=<?php echo $row[3] ?> required>
                <br />
                <input class="alignh input_width" name="prenom" type="text" placeholder=<?php echo $row[2] ?> required>
                <br />
                <input class="alignh input_width" name="login" type="texte" placeholder=<?php echo $row[1] ?> required>
                <br />
                <input class="alignh input_width" name="password" type="password" placeholder="password" required>
                <br />
                <input class="alignh input_width" name="passwordconfirm" type="password" placeholder="confirmez votre password" required>
                <br />
                <div class="alignh">
                    <input name="submit" id="fix_inscription_inscription" class="alignh" type="submit" value="Valider">
                </div>
            </form>
        </section>
    </main>
</body>
<footer id="index_footer">
    <p class="aligncenter">Copyright Laplateforme.io Mandine Enzo 2019</p>
</footer>

</html>