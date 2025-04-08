<?php


//Importo i traits
require_once 'Traits/Ratings.php';


//importo le classi
require_once 'Models/Genre.php';
require_once 'Models/Movie.php';


//importo i dati
require_once './Data/db.php';

$movies[2]->setRating(5);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- BOOTSTRAP -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movies</title>
</head>

<body>
    <h1 class=" text-center">Lista film</h1>
    <div class="container d-flex justify-content-between">
        <?php

        foreach ($movies as $movie) {
            include './Components/Card.php';
        }
        ?>
    </div>

</body>

</html>