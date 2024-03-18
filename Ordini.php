<?php
class Ordini {
    protected $numero_ordine;
    protected $importo_totale;
    protected $articoli_venduti;

    function __construct( $numero_ordine, $importo_totale, $articoli_venduti){
        $this->numero_ordine = $numero_ordine;
        $this->importo_totale = $importo_totale;
        $this->articoli_venduti = $articoli_venduti;
    }
}