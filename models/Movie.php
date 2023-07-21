<?php

include __DIR__ . '/Actor.php';

class Movie
{
    public $title;
    public $genre;
    public $director;
    public $mainActor;

    public function __construct($_title, $_genre, $_director, Actor $actor)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->director = $_director;
        $this->mainActor = $actor->getFullName();
    }

    public function IntroduceDirector()
    {
        echo 'questo film è stato diretto da ' . $this->director;
    }
};
