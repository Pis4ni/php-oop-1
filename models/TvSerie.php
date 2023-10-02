<?php

class TvSerie extends Production
{
    public $name;
    public $author;
    public $year;
    public $generes;
    public $episodes;

    public function __construct(
        string $name,
        string $author,
        int $year,
        array $generes,
        int $episodes,
    ) {
        parent::__construct($name,$author,$year,$generes);
        $this->$episodes = $episodes;
    }
}