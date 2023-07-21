<?php
require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/models/Actor.php';

/**
 * @var Movie[] Array
 */
$movies = require_once __DIR__ . '/data/db.php';
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
        <p>Cast:
          <?php foreach ($movie->cast as $actor) : ?>
            <span>|<?= $actor->getFullName() ?>|</span>
          <?php endforeach ?>
        </p>
        <p>Genre: <?= $movie->genre ?></p>
      </li>
    <?php endforeach ?>
  </ul>
</body>

</html>