<?php
include __DIR__ . '/models/Movie.php';

// istanza film 1
$movie_1 = new Movie('Eragon', 'fantasy', 'Stefan Fangmeier');
var_dump($movie_1);
var_dump($movie_1->IntroduceDirector());

// istanza film 2
$movie_2 = new Movie('Avatar 2', 'Action', 'James Cameron');
var_dump($movie_2);
var_dump($movie_2->IntroduceDirector());
