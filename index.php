<?php
class Movie
{
  public $title;
  public $run_time;
  public $genre;
  public $cast;

  public function __construct(String $title, Int $run_time, $genre = 'Anonimo', $cast = 'Anonimo')
  {
    $this->title  = $title;
    $this->run_time = $run_time;
    $this->genre = $genre;
    $this->cast = $cast;
  }

  public function toUppercaseTitle()
  {
    return strtoupper($this->title);
  }

  public function getRunTime()
  {
    return $this->run_time . 'min';
  }
}

$first_movie = new Movie('Alla ricerca di Nemo', 90, 'Animazione', 'Andrew Stanton');
$second_movie = new Movie('Mamma ho perso l\'aereo ', 130, 'Comico', 'Macaulay Culkin');

$movies = [$first_movie, $second_movie];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
  <title>OOP</title>
</head>

<body class="p-3 bg-dark text-white">
  <h1>FILMS</h1>

  <ul class="d-flex gap-3 ">
    <?php foreach ($movies as $movie) : ?>
      <li class="card p-3">
        <h2><?= $movie->toUppercaseTitle() ?></h2>
        <p>Durata: <?= $movie->getRunTime() ?></p>
        <p>Cast: <?= $movie->cast ?></p>
        <p>Genre: <?= $movie->genre ?></p>
      </li>
    <?php endforeach ?>
  </ul>
</body>

</html>