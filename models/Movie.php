<?php
class Movie extends Production
{
    public $name;
    public $author;
    public $year;
    public $generes;
    public $length;
    

    public function __construct(
        string $name,
        string $author,
        int $year,
        array $generes,
        int $length,
    ) {
        parent::__construct($name,$author,$year,$generes);
        $this->$length = $length;
    }
    
}
;