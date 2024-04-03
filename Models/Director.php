<?php

/**
 * classe che definisce le proprietà di ogni regista
 */

 class Director {
    public $nome;
    public $cognome;
    public $nazione;
    
    /**
     * __construct
     *
     * @param  string $_nome
     * @param  string $_cognome
     * @param  string $nazione
     *
     */
    function __construct($_nome, $_cognome, $_nazione) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->nazione = $_nazione;

    }

    public function getInfoDirector() {

        return $this->nome . ' ' . $this->cognome . ', ' . $this->nazione;

    }


}