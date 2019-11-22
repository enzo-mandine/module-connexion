<?php

// wamp est un pack avec 3 logiciels dedans

// phpmyadmin crée une base de donnée et l'envoie a mysql 

// je crée une table "users"

// Colonne =
// nom = ... 
// type = 
// length/values =
// default = cette colonne va t'elle avoir une valeur par défaut ?
// collation = quelle alphabet va t'on utiliser
// attributes = stocker des images etc.. se mets automatiquement
// null 
// index = permet de définir la facon dont va etre triée la base de donnée
// A_I = auto_increment, le champ va se remplir tout seul avec +1 +1 +1, utilisé pour les id;
// Comments = mettre un commentateur sur le champ de la base de donnée
// Virtuality = le champ est-il calculé ?



// id int primary A_I
// prenom varchar 255
// login varchar 255
// mdp varchar 255

// selectionne toute les informations dans cette table quand le login est ...
// SELECT * FROM users WHERE login = "..."




// Je recupere ma valeur de connexion dans une variable
$connexion = mysqli_connect("serveur", "nom", "motdepasse", "nom de la base de donnée");
// valeur de retour est la valeur que mysql va nous renvoyer...
// Une fois que mysqli a fini son job elle va me renvoyer un résultat
if($connexion == false){
    echo "il y a eu un soucis en se connectant a la bdd";
} else {
    echo "on est bien connecté a la bdd";
}
// on écrit une requete comme dans phpmyadmin
$requete = "SELECT * FROM users";
// Je vais envoyer cette requete a ma base de donnée
// tu vas utiliser tel base de donnée pour effectuer tel requete
// le résultat qu'il renvoie n'est pas exploitable
$query = mysqli_query($connexion, $requete);
// pour que le résultat soit exploitable on utilise fetchall (qui veut dire récupere tout) va chercher tout dans $query
$data = mysqli_fetch_all($query);
// var_dump($data);
// mysqli_fetch_array   =   mets tout dans un grand tableau différent
// mysqli_fetch_assoc   =   affiche tout un par un, il faut le répéter plusieurs fois

// le backspace = \ ... ignore le caractere derriere, le considere comme si il était juste du texte
// "  SELECT * FROM users WHERE login=\"blablabla\"  ";

// $login = "nml"
// $requete = "  SELECT * FROM users WHERE login = \"$login\" ";
// ou
// $requete = " SELECT * FROM users WHERE login=\"".$login"\" ";

// $login = "nml";
// $id = 1;
// $requete = "SELECT * FROM users WHERE login=\"".$login."\" AND id=\"".id;
// $login = "nml";
// $prenom = "Pascal";
// $requete = "SELECT * FROM users WHERE login=\"".$login."\" AND id=\"".$prenom."\";


?>