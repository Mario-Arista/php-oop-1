<?php
/**
 * classe che definisce le proprietà di ogni film
 */
 class Movie {
    // attributi obbligatori
    public $titolo;
    public $linguaOriginale;
    public $anno;
    public $regista;

    // attributi non obbligatori
    public $poster;
    public $genere;
    
    /**
     * __construct
     *
     * @param  string $_titolo
     * @param  string $_linguaOriginale
     * @param  int $_anno
     *
     */
    function __construct($_titolo, $_linguaOriginale, $_anno, Director $_regista) {
        $this->titolo = $_titolo;
        $this->linguaOriginale = $_linguaOriginale;
        $this->anno = $_anno;
        $this->regista = $_regista;

    }

        
    /**
     * funzione che ritorna una frase
     *
     */
    public function presentazione() {
        return "Ecco i film presenti nel database:";
    }


}
