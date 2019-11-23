<?php
// connection au serveur//
$login = mysqli_connect("localhost", "root", "", "moduleconnexion");
// requete serveur //
$request = "SELECT * FROM `utilisateurs`";
// envoie de la query au serveur //
$query = mysqli_query($login, $request);
// récuperation des résultat du query //
$result = mysqli_fetch_all($query);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>

<body id="profil_body">
    <main id="register_main">
        <section id="section_admin">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>login</th>
                        <th>prenom</th>
                        <th>nom</th>
                        <th>password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row) {
                        echo "<tr>";
                        echo "<td>" . $row[0] . "</td>";
                        echo "<td>" . $row[1] . "</td>";
                        echo "<td>" . $row[2] . "</td>";
                        echo "<td>" . $row[3] . "</td>";
                        echo "<td>" . $row[4] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
<footer id="index_footer">
    <p class="aligncenter">Copyright Laplateforme.io Mandine Enzo 2019</p>
</footer>

</html>

<?php

?>