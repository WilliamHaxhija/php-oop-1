<?php 
class Movie {
    public $title;
    public $director;
    public $duration;
    public $genres = [];
    public function __construct($_title, $_director) {
        $this->title = $_title;
        $this->director = $_director;
    }
    public function printMovieInfo() {
        $title = $this->title;
        $director = $this->director;
        $duration = $this->duration;
        return $title . ' - ' . $director . ' - ' . $duration;
    }
 }

//  class Genre {
//     public $genre;
//     public function __construct($_genre) {
//         $this->genre = $_genre;
//     }
//  }

//  $action = new Genre('Action');
//  $thriller = new Genre('Thriller');
//  $adventure = new Genre('Adventure');

 $interstellar = new Movie('Interstellar', 'Christopher Nolan');
 $interstellar->duration = '180min';
 $interstellar->genres = ['Action', 'Adventure', 'Thriller', 'Sci-Fi'];

 $pulpFiction = new Movie('Pulp Fiction', 'Quentin Tarantino');
 $pulpFiction->duration = '120min';
 $pulpFiction->genres = ['Action', 'Splutter'];

 var_dump($interstellar->printMovieInfo());
 var_dump($pulpFiction->printMovieInfo());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    
</body>
</html>