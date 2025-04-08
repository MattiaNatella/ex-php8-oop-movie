<?php

class Genre extends Movie
{

    protected $name;
    protected $description;

    public function __construct($_name, $_description)
    {
        $this->name = $_name;
        $this->description = $_description;
    }

    public function getGenre()
    {
        return "$this->name ";
    }
    public function getDescription()
    {
        echo $this->description; // Restituisce direttamente la descrizione
    }
}

?>