<?php
class Ordini {
    protected $numero_ordine;
    protected $importo_totale;
    protected $articoli_venduti = [];

    function __construct( $numero_ordine, $importo_totale, $articoli_venduti){
        $this->numero_ordine = $numero_ordine;
        $this->importo_totale = $importo_totale;
        $this->articoli_venduti = $articoli_venduti;
    }

    function setNumero_ordine($numero_ordine){
        $this->numero_ordine = $numero_ordine;
    }

    function getNumero_ordine(){
        return $this->numero_ordine;
    }

    function setImporto_totale($importo_totale){
        $this->importo_totale = $importo_totale;
    }

    function getImporto_totale(){
        return $this->importo_totale;
    }

    function setArticoli_venduti($articoli_venduti){
        $this->articoli_venduti = $articoli_venduti;
    }

    function getArticoli_venduti(){
        return $this->articoli_venduti;
    }


}