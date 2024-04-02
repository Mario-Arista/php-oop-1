<?php

require 'db.php';

?>

<!DOCTYPE html>
<html lang="it-IT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS solo per poster -->
    <style>
        .movie-poster {
            height: 540px;
            object-fit: cover;
        }

    </style>

</head>

<body class="bg-dark">

    <?php include './layout/header.php' ?>
    
    <main class="container-fluid"> 

        <div class="w-75 m-auto row">

            <h2 class="text-warning pt-4 pb-4">
                <?php $movie1->presentazione(); ?>
            </h2>

            <?php
            foreach($movies as $movie) {

                echo "
                <div class='d-flex flex-column justify-content-center align-items-center text-white mb-3 col-4'>
                    <div>
                        <img class='movie-poster img-fluid mx-auto' src='" . $movie?->poster . "' alt='" . $movie->titolo . "'>
                    </div>
                    <div class='mt-2'>
                        <strong class='text-warning'>Titolo: </strong>"  . $movie->titolo . "
                    </div>
                    <div>
                        <strong class='text-warning'>Lingua originale: </strong>"  . $movie->linguaOriginale . "</div>
                    <div>
                        <strong class='text-warning'>Anno di uscita: </strong>"  . $movie->anno . "
                    </div>
                    <div>
                        <strong class='text-warning'>Genere: </strong>"  . $movie->genere . "
                    </div>

                    <div>
                        <strong class='text-warning'>Regista: </strong>"  . $movie->regista->getInfoDirector() . "
                    </div>

                </div>";

            }
            ?>
        </div>
    </main>


     <!-- BOOTSTRAP -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>