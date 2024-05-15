<?php 
class Movie {
    public $title;
    public $director;
    public $duration;
    public function __construct($_title, $_director) {
        $this->title = $_title;
        $this->director = $_director;
    }
    public function printMovieInfo() {
        $title = $this->title;
        $director = $this->director;
        $duration = $this->duration;
        return $title . ' ' . $director . ' ' . $duration;
    }
 }

 $interstellar = new Movie('Interstellar', 'Christopher Nolan');
 $interstellar->duration = '180min';
 var_dump($interstellar->printMovieInfo());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>