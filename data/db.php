<?php
// Array dei CAST
$cast_first_movie = [new Actor('Andrew', 'Stanton', 50), new Actor('Pippo', 'Baudo', 60)];
$cast_second_movie = [new Actor('Brad', 'Pitt', 50), new Actor('Lara', 'Croft', 30)];
$cast_third_movie = [new Actor('Jonny', 'Depp', 40), new Actor('Andrea', 'Romano', 35)];
$cast_fourth_movie = [new Actor('Giovanni', 'Muchacha', 56), new Actor('Martin', 'Lutero', 105)];

// Movie
$first_movie = new Movie('Alla ricerca di Nemo', 90, 'Animazione', $cast_first_movie);
$second_movie = new Movie('Mamma ho perso l\'aereo ', 130, 'Comico', $cast_second_movie);
$third_movie = new Movie('Pirati Dei Caraibi ', 210, 'Comico', $cast_third_movie);
$fourth_movie = new Movie('Alla ricerca di Dori ', 95, 'Animazione', $cast_fourth_movie);

return [$first_movie, $second_movie, $third_movie, $fourth_movie];
