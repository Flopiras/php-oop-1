<?php
class Movie
{
    public $title;
    public $genre;
    public $director;

    public function __construct($_title, $_genre, $_director)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->director = $_director;
    }

    public function IntroduceDirector()
    {
        echo 'questo film è stato diretto da ' . $this->director;
    }
};

// istanza film 1
$movie_1 = new Movie('Eragon', 'fantasy', 'Stefan Fangmeier');
var_dump($movie_1);
var_dump($movie_1->IntroduceDirector());

// istanza film 2
$movie_2 = new Movie('Avatar 2', 'Action', 'James Cameron');
var_dump($movie_2);
var_dump($movie_2->IntroduceDirector());
