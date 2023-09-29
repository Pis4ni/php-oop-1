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

    public function __construct(
        string $name,
        string $author,
        int $year,
        // * oggetto di tipo 'Genere'
        Genere $genere,
    ) {
        $this->name = $name;
        $this->author = $author;
        $this->year = $year;
        $this->generes = $genere;

    }

    public function printAllInfo()
    { /* calcolo */
        $all_infos = ($this->name . $this->author . $this->year);
        return $all_infos;
    }
}
;


class Genere
{
    public $name;

    public function __construct(
        $name
    ) {
        $this->name = $name;
    }
}







$il_pianeta_del_tesoro_genere = new Genere('avventura');
$il_pianeta_del_tesoro = new Movie('il_pianeta_del_tesoro', 'Ron Clements', 2002, $il_pianeta_del_tesoro_genere);

$naruto_genere = new Genere('anime');
$naruto = new Movie('naruto', 'nakamoto', 1999, $naruto_genere);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php var_dump($il_pianeta_del_tesoro_genere)?>
    <?php var_dump($il_pianeta_del_tesoro)?>
    <?php var_dump($naruto_genere)?>
    <?php var_dump($naruto)?>
</body>
</html>