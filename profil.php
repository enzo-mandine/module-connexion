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
            <form method="POST" action="index.php">
                <input class="alignh input_width" name="nom" type="texte" placeholder="Dupont">
                <br />
                <input class="alignh input_width" name="prenom" type="text" placeholder="Jean">
                <br />
                <input class="alignh input_width" name="login" type="texte" placeholder="JDdu13">
                <br />
                <input class="alignh input_width" name="password" type="password" placeholder="password">
                <br />
                <input class="alignh input_width" name="passwordconfirm" type="password" placeholder="password">
                <br />
                <div class="alignh">
                    <input id="fix_inscription_inscription" class="alignh" type="submit" value="Valider">
                </div>
            </form>
        </section>
    </main>
</body>
<footer id="index_footer">
    <p class="aligncenter">Copyright Laplateforme.io Mandine Enzo 2019</p>
</footer>

</html>