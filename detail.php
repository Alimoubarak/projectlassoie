<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAIL</title>
    <style>
        label {
            width: 20%;
            display: inline-block;
            text-align: left;
        }

        body {
            width: 50%;
            font-family: Arial, Helvetica, sans-serif;
            margin: 50px auto;
            background: #f4f7f8;
            padding: 20%;
            color: #1abc9c;
        }

        fieldset {
            border-radius: 8px;
        }

        legend {
            font-size: 1.4em;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"] {
            border-radius: 5px;
            padding: 10px;
            width: 60%;
            background-color: white;
            margin: 10px;
        }

        input[type="submit"] {
            position: relative;
            padding: 20px;
            font-size: 18px;
            border: 1px solid #16a085;
            border-radius: 2px;
            margin-bottom: 10px;
            margin-top: 10px;
            width: 100%;
            font-size: 10px;
            font-style: bold;
            color: black;
        }

        ul {
            list-style-type: none;
            padding: 20px;
            overflow: hidden;
            margin: 20px;
            background-color: #333;
        }

        li {
            display: inline;
            padding: 20px;
            margin: 10px;
        }

        li a {
            color: white;
            padding: 10px;
            margin: 20px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="https://www.iepsm.be/"></a> Accueil
                </li>
                <li>
                    <a href="https://www.iepsm.be/"></a>Actualités
                </li>
                <li>
                    <a href="https://www.iepsm.be/"></a>Contact
                </li>
            </ul>
        </nav>
    </header>

    <?php


    include "connexion.php";

    if (isset($_POST["id"])) {
        $id = $_POST["id"];
        $req = mysqli_query($link, "SELECT * from user where id='$id' ");
        $res = mysqli_fetch_array($req);
    } else {
        echo "champs manquants";
    }


    ?>
    <form action="modifier.php" method="GET">
        <fieldset>
            <legend>detail</legend>
            <input type="hidden" value="<?php echo $res["id"] ?>" />
            <label>nom</label><input type="text" name="nom" value=<?php echo $res["nom"] ?> placeholder="entrez votre nom de famille ici" /> <br>
            <label>prenom</label><input type="text" name="prenom" value=<?php echo $res["prenom"] ?> /> <br>
            <label>tel</label><input type="number" name="tel" value=<?php echo $res["tel"] ?> placeholder="entrez votre numero de Téléphone ici" /> <br>
            <label>adresse postale</label><input type="text" name="adresse_postale" value=<?php echo $res["adresse_postale"] ?> placeholder="entrez votre adresse ici" /> <br>
            <label>email</label><input type="email" name="email" value=<?php echo $res["email"] ?> placeholder="entrez votre adresse mail ici" /> <br>
            <label>Sexe</label>
            <?php

            if ($res["gender"] == "Homme") {


            ?>
                <input type="radio" name="gender" value="Homme" checked="true" />Homme
                <input type="radio" name="gender" value="Femme" />Femme <br>
            <?php
            } else {
            ?>
                <input type="radio" name="gender" value="Homme" />Homme
                <input type="radio" name="gender" value="Femme" checked="true" />Femme <br>
            <?php
            }
            ?>
            <input type="submit" value="modifier" />
        </fieldset>
    </form>
</body>

</html>