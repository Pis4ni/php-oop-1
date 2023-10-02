<?php

require __DIR__ . '/models/Production.php';
require __DIR__ . '/models/Movie.php';
require __DIR__ . '/models/Genere.php';
require __DIR__ . '/models/TvSerie.php';

$movies = [
    new Movie(
        'Il Pianeta del Tesoro',
        'Ron Clements',
        2002,
        new Genere(['fantasy']),
        120,
        2002
    ),

    new Movie(
        'Interstellar',
        'Christopher Nolan',
        2014,
        new Genere(['fantasy']),
        169,
        2014
    ),

    new Movie(
        'The Shawshank Redemption',
        'Frank Darabont',
        1994,
        new Genere(['fantasy']),
        142,
        1994
    ),

    new Movie(
        'Inception',
        'Christopher Nolan',
        2010,
        new Genere(['fantasy']),
        148,
        2010
    ),

    new Movie(
        'The Dark Knight',
        'Christopher Nolan',
        2008,
        new Genere(['fantasy']),
        152,
        2008
    ),

];

$tvSeries = [
    new TvSerie(
        'Breaking Bad',
        'Vince Gilligan',
        2008,
        new Genere(['fantasy']),
        62,
        5,
        2008,
        2013
    ),

    new TvSerie(
        'Game of Thrones',
        'David Benioff, D.B. Weiss',
        2011,
        new Genere(['fantasy']),
        73,
        8,
        2011,
        2019
    ),

    new TvSerie(
        'Stranger Things',
        'The Duffer Brothers',
        2016,
        new Genere(['fantasy']),
        34,
        3,
        2016,
        2023
    ),

    new TvSerie(
        'Friends',
        'David Crane, Marta Kauffman',
        1994,
        new Genere(['fantasy']),
        236,
        10,
        1994,
        2004
    ),

    new TvSerie(
        'The Crown',
        'Peter Morgan',
        2016,
        new Genere(['fantasy']),
        60,
        6,
        2016,
        2023
    ),
];




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <?php foreach ($movies as $movie): ?>

                    <div class="col-4">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo ($movie->name) ?></h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo ($movie->author) ?></h6>
                                <strong class="card-text">Year:</strong>
                                <span class="card-text"> <?php echo ($movie->year) ?> </span><br>
                                <strong class="card-text">Generes:</strong>
                                <span class="card-text"> <?php echo ($movie->get_generes()) ?>  </span><br>
                                <strong class="card-text">Length:</strong>
                                <span class="card-text"> <?php echo ($movie->length) ?> </span>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
            <div class="row">
                <?php foreach ($tvSeries as $serie): ?>

                    <div class="col-4">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo ($serie->name) ?></h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo ($serie->author) ?></h6>
                                <strong class="card-text">Year:</strong>
                                <span class="card-text"> <?php echo ($serie->year) ?> </span><br>
                                <strong class="card-text">Generes:</strong>
                                <span class="card-text"> <?php echo ($serie->get_generes()) ?>  </span><br>
                                <strong class="card-text">Seasons:</strong>
                                <span class="card-text"> <?php echo ($serie->number_of_seasons) ?> </span>
                                <strong class="card-text">Episodes:</strong>
                                <span class="card-text"> <?php echo ($serie->episodes) ?> </span>
                                <strong class="card-text">On-Air from:</strong>
                                <span class="card-text"> <?php echo ($serie->aired_from_year) ?> </span>
                                <strong class="card-text">On-Air to:</strong>
                                <span class="card-text"> <?php echo ($serie->aired_to_year) ?> </span>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>

</body>

</html>