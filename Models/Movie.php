<?php
class Movie
{


    //Proprietà classe Movie
    public $title;
    public $cover;
    public $director;
    public $year;
    public $duration;
    public $plot;
    public array $genres;

    //Trait Ratings
    use Ratings;


    //Costruttore classe Movie
    public function __construct($_title, $_director, $_year, $_duration, $_plot, $_cover, array $_genres)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->plot = $_plot;
        $this->cover = $_cover;
        $this->duration = $_duration;
        $this->genres = $_genres;
    }

    //metodo classe Movie
    public function getInfo()
    {
        echo "Il film $this->title diretto da $this->director è uscito nel $this->year e dura $this->duration. <br> TRAMA: $this->plot";
    }

    public function getGenreName()
    {
        foreach ($this->genres as $genre) {
            echo $genre->getGenre(); // Usa il metodo corretto getGenre()
        }

    }
}
?>