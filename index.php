<?php
include __DIR__ . '/models/Movie.php';

// istanza attore film 1
$actor_1 = new Actor('Edward', 'Speleers');

// istanza attore film 2
$actor_2 = new Actor('Sam', 'Worth');

// istanza film 1
$movie_1 = new Movie('Eragon', 'fantasy', 'Stefan Fangmeier', $actor_1);
// var_dump($movie_1);
// var_dump($movie_1->IntroduceDirector());

// istanza film 2
$movie_2 = new Movie('Avatar 2', 'Action', 'James Cameron', $actor_2);
// var_dump($movie_2);
// var_dump($movie_2->IntroduceDirector());

// array di films
$movies = [$movie_1, $movie_2];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
</head>

<body>
    <div class="container">
        <header>
            <h1 class="text-danger my-4 text-center">Movies List</h1>
        </header>
    </div>
</body>

</html>