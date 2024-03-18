<?php
class OrdiniFisico extends Ordini {
    protected $pagamento = [];
    public function __construct($numero_ordine, $importo_totale, $articoli_venduti, $pagamento) {
        parent::__construct($numero_ordine, $importo_totale, $articoli_venduti);
        $this->pagamento = $pagamento;
    }

    function getPagamento(){
        return $this->pagamento;
    }

    public function addPagamento($carta, $contanti) {
        $this->misurazioni[] = ['carta' => $carta, 'contanti' => $contanti];
    }
}