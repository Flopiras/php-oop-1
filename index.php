<?php
include __DIR__ . '/models/Movie.php';

// istanza attore film 1
$actor_1 = new Actor('Edward', 'Speleers');

// istanza attore film 2
$actor_2 = new Actor('Sam', 'Worth');

// istanza film 1
$movie_1 = new Movie('Eragon', 'fantasy', 'Stefan Fangmeier', $actor_1);
var_dump($movie_1);
var_dump($movie_1->IntroduceDirector());

// istanza film 2
$movie_2 = new Movie('Avatar 2', 'Action', 'James Cameron', $actor_2);
var_dump($movie_2);
var_dump($movie_2->IntroduceDirector());

// array di films
$movies = [$movie_1, $movie_2];
