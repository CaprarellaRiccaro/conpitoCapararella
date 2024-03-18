<?php
class Articolo_venduto {
    protected $id;
    protected $prezzo_di_vendita;
    protected $quantita_acquistata;

    function __construct($id, $prezzo_di_vendita, $quantita_acquistata){
        $this->id = $id;
        $this->prezzo_di_vendita = $prezzo_di_vendita;
        $this->quantita_acquistata = $quantita_acquistata;
    }
}