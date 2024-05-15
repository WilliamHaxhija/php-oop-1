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

$interstellar = new Movie('Interstellar', 'Christopher Nolan');
$interstellar->duration = '180min';
$interstellar->genres = ['Action', 'Adventure', 'Thriller', 'Sci-Fi'];

$pulpFiction = new Movie('Pulp Fiction', 'Quentin Tarantino');
$pulpFiction->duration = '120min';
$pulpFiction->genres = ['Action', 'Splutter'];

$movies = [$interstellar, $pulpFiction];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center w-25">
        <h1>MOVIES</h1>
        <div class="d-flex">
            <?php foreach ($movies as $movie) { ?>
                <div class="card me-2">
                    <?php echo $movie->printMovieInfo();
                    foreach ($movie->genres as $genre) {
                        echo ' ' . $genre;
                    }
                    ?>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>