<?php

trait Ratings
{
    private $rating;
    public function setRating($rating)
    {
        if ($rating > 0 && $rating < 6) {
            $this->rating = $rating;
        } else {
            echo "Inserire un voto compreso fa 1 e 5 inclusi!";
        }
    }
    public function getRating()
    {
        echo $this->rating;
    }
}
