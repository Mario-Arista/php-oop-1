<?php


/**
 * classe che definisce le proprietà di ogni film
 */

class Movie {
    public $titolo;
    public $linguaOriginale;
    public $anno;
    
    /**
     * __construct
     *
     * @param  string $_titolo
     * @param  string $_linguaOriginale
     * @param  int $_anno
     *
     */
    function __construct($_titolo, $_linguaOriginale, $_anno) {
        $this->titolo = $_titolo;
        $this->linguaOriginale = $_linguaOriginale;
        $this->anno = $_anno;

    }

        
    /**
     * funzione che ritorna una frase
     *
     */
    public function presentazione() {
        echo "Ecco i film presenti nel database:";
    }


}

// istanzio tre oggetti di classe Movie 
$movie1 = new Movie("Bastardi senza gloria", "eng", 2009);
$movie2 = new Movie("Kill Bill Volume 1", "eng", 2003);
$movie3 = new Movie("Grand Budapest Hotel", "eng", 2014);

// creo un array con dentro i tre film
$movies = [
    $movie1,
    $movie2,
    $movie3

];

?>

<!DOCTYPE html>
<html lang="it-IT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-dark">

    <header class="container-fluid bg-secondary">
        <h1 class="text-warning fs-1 p-3 text-center">Film</h1>
    </header>
    
    <main class="container-fluid"> 

        <ul class="w-75 m-auto">

            <h2 class="text-warning pt-4 pb-4">
                <?php $movie1->presentazione(); ?>
            </h2>

            <?php
            foreach($movies as $movie) {

                echo "
                <li class='list-unstyled text-white mb-3'>
                    <strong class='text-warning'>Titolo: </strong>" . $movie->titolo . " <br>   
                    <strong class='text-warning'>Lingua originale:  </strong>" . $movie->linguaOriginale . " <br> 
                    <strong class='text-warning'>Anno uscita:  </strong>" . $movie->anno . "
                </li>";

            }
            ?>
        </ul>
    </main>


     <!-- BOOTSTRAP -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>