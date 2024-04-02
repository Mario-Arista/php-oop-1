<?php

require './Models/Movie.php';

// istanzio tre oggetti di classe Director
$director1 = new Director("Quentin", "Tarantino", "Americano");
$director2 = new Director("Wes", "Anderson", "Americano");


// istanzio tre oggetti di classe Movie
$movie1 = new Movie("Bastardi senza gloria", "eng", 2009, $director1);
$movie2 = new Movie("Kill Bill Volume 1", "eng", 2003, $director1);
$movie3 = new Movie("Grand Budapest Hotel", "eng", 2014, $director2);

// Aggiungo ad ognuno genere e poster 
$movie1->poster = "https://pad.mymovies.it/filmclub/2008/10/105/locandina.jpg";
$movie1->genere = "Guerra";

$movie2->poster = "https://m.media-amazon.com/images/I/61mUJ4Zxc8L._AC_UF894,1000_QL80_DpWeblab_.jpg";
$movie2->genere = "Azione";

$movie3->poster = "https://m.media-amazon.com/images/I/711-gHvPVqL._AC_UF1000,1000_QL80_.jpg";
$movie3->genere = "Commedia";

// creo un array con dentro i tre film
$movies = [
    $movie1,
    $movie2,
    $movie3

];