<?php
class Movie
{


    //Proprietà classe Movie
    public $title;
    public $director;
    public $year;
    public $duration;
    public $genres = [];

    //Trait Ratings
    use Ratings;


    //Costruttore classe Movie
    public function __construct($_title, $_director, $_year, $_duration, array $_genres)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->genres = $_genres; // Accetta un array di generi
    }

    //metodo classe Movie
    public function getInfo()
    {
        echo "Il film $this->title diretto da $this->director è uscito nel $this->year e dura $this->duration";
    }
}
?>