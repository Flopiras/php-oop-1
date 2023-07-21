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
}
