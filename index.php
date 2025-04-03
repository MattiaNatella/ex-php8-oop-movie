<?php
/*
*Svolgimento**
Creare un file index.php in cui
- è definita la classe Movie
=> all'interno della classe sono dichiarate delle variabili d'istanza OK
=> all'interno della classe è definito un costruttore OK
=> all'interno della classe è definito almeno un metodo OK
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà OK

- è definita una classe Genre OK
-> all'interno della classe sono dichiarate delle variabili d'istanza OK
-> all'interno della classe è definito un costruttore OK
- ogni film ha un genere OK

**Bonus 1**
Modificare la classe Movie in modo che accetti piú di un genere. OK

**Bonus 2**
Aggiungere un Trait alla classe Movie con almeno una proprietà e un metodo. OK

**Bonus 3**
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle.

Possiamo ad esempio organizzare il codice OK
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.


*/
require_once 'Traits/Ratings.php';

require_once 'Models/Movie.php';
require_once 'Models/Genre.php';

$ioSonoLeggenda = new Movie(
    'Io Sono Leggenda',
    'Tim Burton',
    2020,
    115,
    [new Genre('Thriller', "In un thriller, il protagonista deve spesso fermare i piani criminali dell'antagonista e i crimini sono normalmente compiuti su larga scala: omicidi seriali o di massa, atti di terrorismo oppure rovesciamenti di governi. Il pericolo e gli scontri più o meno violenti sono spesso elementi fondamentali della trama.")]
);

$ioSonoLeggenda->genres[] = new Genre('Horror', 'Film che fa paura');

$thePrestige = new Movie('The Prestige', 'Christopher Nolan', 2018, 120, [new Genre('Fantascienza', "film viene ambientato in un contesto legato a una visione più o meno lontana del futuro, come quello dei viaggi interstellari, quello del contatto con entità extraterrestri, quello dei conflitti nucleari o delle catastrofi climatiche globali.")]);

$inception = new Movie(
    'Inception',
    'Christopher Nolan',
    2005,
    118,
    [
        new Genre('Thriller', 'Descrizione Thriller'),
        new Genre('Horror', 'Descrizione Horror')
    ]
);




echo '<br>';
foreach ($ioSonoLeggenda->genres as $genre) {
    echo $genre->getDescription() . '<br><br><br>'; // Itera sugli oggetti Genre e chiama getDescription()
}

//utilizzo Trait Rating

$inception->setRating(5);

var_dump($inception);

?>