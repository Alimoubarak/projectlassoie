<?php

include "connexion.php";

if (isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["tel"]) && isset($_GET["adresse_postale"]) && isset($_GET["email"]) && isset($_GET["gender"])); {
    $nom = $_GET["nom"];
    $prenom = $_GET["prenom"];
    $tel = $_GET["tel"];
    $adresse_postale = $_GET["adresse_postale"];
    $email = $_GET["email"];
    $gender = $_GET["gender"];

    $req = mysqli_query($link, "insert into user(nom,prenom,tel,adresse_postale,email,gender) values ('$nom','$prenom','$tel','$adresse_postale','$email','$gender')");

    if ($req) {
        echo "inertion effectuée avec succès";
    } else {
        echo "erreur d'insertion";
    }
}
