<?php
// Array dei CAST
$cast_first_movie = [new Actor('Andrew', 'Stanton', 50), new Actor('Pippo', 'Baudo', 60)];
$cast_second_movie = [new Actor('Brad', 'Pitt', 50), new Actor('Lara', 'Croft', 30)];

// Movie
$first_movie = new Movie('Alla ricerca di Nemo', 90, 'Animazione', $cast_first_movie);
$second_movie = new Movie('Mamma ho perso l\'aereo ', 130, 'Comico', $cast_second_movie);

return [$first_movie, $second_movie];
