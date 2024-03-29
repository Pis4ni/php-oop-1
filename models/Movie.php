<?php
class Movie extends Production
{
    public $name;
    public $author;
    public $year;
    public $generes;
    public $length;
    public $published_year;

    public function __construct(
        string $name,
        string $author,
        int $year,
        Genere $generes,
        int $length,
        int $published_year,
    ) {
        parent::__construct($name,$author,$year,$generes);
        $this->length = $length;

        $this->published_year = $published_year;
    }
    public function get_generes(){
        $full_name = '';
        foreach ($this->generes->names as $name){
            $full_name .= $name;
        }
        return $full_name;
    }
}