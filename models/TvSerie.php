<?php

class TvSerie extends Production
{
    public $name;
    public $author;
    public $year;
    public $generes;
    public $episodes;

    public $number_of_seasons;
    public $aired_from_year;
    public $aired_to_year;
    public function __construct(
        string $name,
        string $author,
        int $year,
        Genere $generes,
        int $episodes,
        int $number_of_seasons,
        int $aired_from_year,
        int $aired_to_year,

    ) {
        parent::__construct($name,$author,$year,$generes);
        $this->episodes = $episodes;
        $this->number_of_seasons = $number_of_seasons;
        $this->aired_from_year = $aired_from_year;
        $this->aired_to_year = $aired_to_year;
    }
}