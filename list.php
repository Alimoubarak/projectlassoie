<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Fonts Pre Connect -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>USER LIST</title>
</head>
<style>
    body {
        width: 50%;
        margin: auto;
    }

    table {
        border-collapse: collapse;
        margin: 25% 0;
        padding: 5px;
        font-size: 0.9em;
        font-family: sans-serif;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0, 15);
    }

    td,
    th {
        padding: 10px;
        text-align: center;
    }

    thead {
        padding: 30px;
    }

    thead tr,
    tfoot tr {
        background-color: #009879;
        color: #ffffff;
        text-align: center;
    }

    tbody tr.active-row {
        font-weight: bold;
        color: #009879;
    }

    tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    input[type="submit"] {
        width: 8em;
        background-color: #4caf50;
        border: none;
        border-radius: 3px;
        color: white;
        padding: 6px;
        text-align: center;
        font-weight: bold;
        margin: 5px;

    }
</style>

<body>

    <h1><b>LISTE DES UTILISATEURS</b></h1>
    <table>
        <thead>
            <tr>
                <th>Identifiant</th>
                <th>nom</th>
                <th>prenom</th>
                <th>tel</th>
                <th>adresse_postale</th>
                <th>email</th>
                <th>gender</th>
                <th>action</th>
            </tr>
        </thead>

        <?php
        include "connexion.php";
        $req = mysqli_query($link, " SELECT * FROM user");

        while ($res = mysqli_fetch_array($req)) {
        ?>

            <tbody>
                <tr>
                    <td><?php echo $res["id"]; ?></td>
                    <td><?php echo $res["nom"]; ?></td>
                    <td><?php echo $res["prenom"]; ?></td>
                    <td><?php echo $res["tel"]; ?></td>
                    <td><?php echo $res["adresse_postale"]; ?></td>
                    <td><?php echo $res["email"]; ?></td>
                    <td><?php echo $res["gender"]; ?></td>
                    <td>
                        <form action="detail.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $res["id"]; ?>" />
                            <input type="submit" value="detail" />
                        </form>


                        <form action="delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $res["id"]; ?>" />
                            <input type="submit" value="supprimer" />
                        </form>


                    </td>
                </tr>
            </tbody>


        <?php

        }

        ?>
        <tfoot>
            <tr>
                <td colspan=7>
                    Liste des utilisateurs inscrits
                </td>
            </tr>
        </tfoot>

    </table>


</body>

</html>