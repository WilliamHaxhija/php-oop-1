<?php
class Movie
{
    public $title;
    public $director;
    public $duration;
    public $genres = [];
    public function __construct($_title, $_director)
    {
        $this->title = $_title;
        $this->director = $_director;
    }
    public function printMovieInfo()
    {
        $title = $this->title;
        $director = $this->director;
        $duration = $this->duration;
        return $title . ' ' . $director . ' ' . $duration;
    }
}

?>