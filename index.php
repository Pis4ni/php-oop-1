<?php

require __DIR__ . '/models/Production.php';
require __DIR__ . '/models/Movie.php';
require __DIR__ . '/models/Genere.php';
require __DIR__ . '/models/TvSerie.php';

$il_pianeta_del_tesoro_generes[] = new Genere('avventura');
$il_pianeta_del_tesoro_generes[] = new Genere('fantascienza');
$il_pianeta_del_tesoro = new Movie('il Pianeta del Tesoro', 'Ron Clements', 2002, $il_pianeta_del_tesoro_generes,120);
$naruto_generes[] = new Genere('shonen');
$naruto_generes[] = new Genere('anime');
$naruto = new TvSerie('Naruto', 'Nakamoto', 2002, $naruto_generes, 500);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php var_dump($il_pianeta_del_tesoro) ?>
    <?= '<hr>' ?>
    <?php var_dump($naruto)?>
    <?= '<hr>' ?>


</body>
</html>