<?php

include "connexion.php";

if (isset($_POST["id"])) {
    $id = $_POST["id"];

    $req = mysqli_query($link, "DELETE FROM user where id='$id' ");

    if ($req) {
        header("location:list.php");
    } else {
        echo "erreur de suppression";
    }
} else {
    echo "champs manquants";
}
