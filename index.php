<?php

/*
 * ### Class Movie
 * Define a Class Movie
 * @author
 */

class Movie
{ 
    public $name;
    public $author;
    public $year;
    public $generes;

    public function _construct(
        $val_1,
        $val_2,
        $val_3,
        $genere,
    ) {
        $this->name = $val_1;
        $this->author = $val_2;
        $this->year = $val_3;
        $this->printAllInfo($val_1 , $val_2 , $val_3);
        $this->addGenere($genere);
    }

    public function printAllInfo($val_1 , $val_2 , $val_3)
    { /* calcolo */
        $all_infos = ($val_1 . $val_2 . $val_3);
        return $all_infos;
    }
    public function addGenere($genere)
    { /* calcolo */
        $generes[] = $genere;
    }
};