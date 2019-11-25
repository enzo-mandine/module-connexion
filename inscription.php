<?php
if (isset($_POST["regsubmit"])) {
    if ($_POST["password"] == $_POST["passwordconfirm"]) {
        $login = mysqli_connect("localhost", "root", "", "moduleconnexion");
        $request = "SELECT * FROM `utilisateurs`";
        $query = mysqli_query($login, $request);
        $result = mysqli_fetch_all($query);
        $connectstate = true;        
        $i = 0;
        while ($i < count($result)) {
            if ($result[$i][1] == $_POST["login"]) {
                $connectstate = false;
                header("location:inscription.php");
                break;
            }
            ++$i;
        }
        if ($connectstate == true) {
            $request = "INSERT INTO utilisateurs (`id`, `login`, `prenom`, `nom`, `password`) VALUES (NULL, '" . $_POST["login"] . "', '" . $_POST["prenom"] . "', '" . $_POST["nom"] . "', '" . password_hash($_POST["password"], PASSWORD_DEFAULT) . "');";
            mysqli_query($login, $request);
            mysqli_close($login);
            header("location:connexion.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>

<body id="register_body">
    <main id="register_main">
        <section id="module_signin">
            <p id="register_p">Tu veux faire partie de l'équipe ?<br />C'est par ici :</p>
            <form method="POST" action="inscription-.php">
                <input class="alignh input_width" name="nom" type="texte" placeholder="Dupont" required>
                <br />
                <input class="alignh input_width" name="prenom" type="text" placeholder="Jean" required>
                <br />
                <input class="alignh input_width" name="login" type="texte" placeholder="JDdu13" required>
                <br />
                <input class="alignh input_width" name="password" type="password" placeholder="password" required>
                <br />
                <input class="alignh input_width" name="passwordconfirm" type="password" placeholder="password" required>
                <br />
                <div class="alignh">
                    <input name="regsubmit" id="fix_inscription_inscription" class="alignh" type="submit" value="Inscription">
                </div>
            </form>
        </section>
    </main>
</body>
<footer id="index_footer">
    <p class="aligncenter">Copyright Laplateforme.io Mandine Enzo 2019</p>
</footer>

</html>