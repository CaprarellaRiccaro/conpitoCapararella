<?php
class OrdiniOnline extends Ordini {
    protected $indirizzo_IP;
    protected $codice_di_autorizzazione;

    public function __construct($numero_ordine, $importo_totale, $articoli_venduti, $pagamento) {
        parent::__construct($numero_ordine, $importo_totale, $articoli_venduti);
        $this->indirizzo_IP = $indirizzo_IP;
        $this->codice_di_autorizzazione = $codice_di_autorizzazione;
    }

    function setIndirizzo_IP($indirizzo_IP) {
        $this->indirizzo_IP = $indirizzo_IP;
    }

    function getIndirizzo_IP() {
        return $this->indirizzo_IP;
    }

    function setCodice_di_autorizzazione($codice_di_autorizzazione) {
        $this->codice_di_autorizzazione = $codice_di_autorizzazione;
    }

    function getCodice_di_autorizzazione() {
        return $this->codice_di_autorizzazione;
    }
}