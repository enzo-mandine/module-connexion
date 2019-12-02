<?php
session_start();
if (!isset($_SESSION["isconnected"])) {
    header("location:index.php");
    die;
}
if (isset($_GET["logout"])) {
    session_destroy();
    header("location:index.php");
}
$login = mysqli_connect("localhost", "root", "", "moduleconnexion");
$request = "SELECT * FROM `utilisateurs`";
$query = mysqli_query($login, $request);
$result = mysqli_fetch_all($query);
if (isset($_POST["logout"])) {
    session_destroy();
}
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
    <main id="admin_main">
        <section id="section_admin">
            <table class="border">
                <thead class="border">
                    <p id="intro">Liste des membres</p>
                    <tr class="border">
                        <th class="border">id</th>
                        <th class="border">login</th>
                        <th class="border">prenom</th>
                        <th class="border">nom</th>
                        <th class="border">password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row) {
                        echo "<tr>";
                        echo "<td class='border'>" . $row[0] . "</td>";
                        echo "<td class='border'>" . $row[1] . "</td>";
                        echo "<td class='border'>" . $row[2] . "</td>";
                        echo "<td class='border'>" . $row[3] . "</td>";
                        echo "<td class='border'>" . $row[4] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <a href="admin.php?logout=true">
                <input type="submit" name="logout" value="Deconnexion">
            </a>
        </section>
    </main>
</body>
<footer id="index_footer">
    <p class="aligncenter">Copyright Laplateforme.io Mandine Enzo 2019</p>
</footer>

</html>

<?php

?>