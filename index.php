<?php

//Importo i traits
require_once 'Traits/Ratings.php';


//importo le classi
require_once 'Models/Movie.php';
require_once 'Models/Genre.php';

//importo i dati
require_once 'db.php';

$movies[2]->setRating(5);

var_dump($movies);

echo '<br>';
foreach ($movies->genres as $genre) {
    echo $genre->getDescription() . '<br><br><br>'; // Itera sugli oggetti Genre e chiama getDescription()
}

?>