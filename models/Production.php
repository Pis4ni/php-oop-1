<?php
class Production
{
    public $name;
    public $author;
    public $year;
    public $generes;

    public function __construct(
        string $name,
        string $author,
        int $year,
        Genere $generes,
    ) {
        $this->set_name($name);
        $this->set_author($author);
        $this->set_year($year);
        $this->set_generes($generes);
    }

    public function set_name($name){
        if (empty($name))return false;
        $this->name = $name;
    }
    public function set_author($author){
        if (empty($author))return false;
        $this->author = $author;
    }
    public function set_year($year){
        if (empty($year))return false;
        $this->year = $year;
    }
    public function set_generes($generes){
        
        // todo controllo diverso devo fare una verifica sul tipo di genere che deve essere appunto di tipo Genere
        
        // if (($generes))return false;
        $this->generes = $generes;
    }
    public function printDetails()
    { /* calcolo */
        $print_details = ($this->name . $this->author . $this->year);
        return $print_details;
    }

    // public function generesToTxt(){
    //     foreach($generes as $genere){

    //     }
    // }
}