<?php

include "connexion.php";

if (isset($_GET["id"]) && isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["tel"]) && isset($_GET["adresse_postale"]) && isset($_GET["email"]) && isset($_GET["gender"])) {
    $id = $_GET["id"];
    $prenom = $_GET["prenom"];
    $tel = $_GET["tel"];
    $adresse_postale = $_GET["adresse_postale"];
    $email = $_GET["email"];
    $gender = $_GET["gender"];

    $req = mysqli_query($link, "UPDATE user SET nom='$nom', prenom='$prenom' , tel='$tel' , adresse_postale='$adresse_postale' , email='$email' , gender='$gender' WHERE id='$id'");

    if ($req) {
        header("location:list.php");
    } else {
        echo "echec de mise à jour";
    }
} else {
    echo "champs manquants";
}
