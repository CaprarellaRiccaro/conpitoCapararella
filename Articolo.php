<?php
class Articolo {
    protected $id;
    protected $nome;
    protected $descrizione;
    protected $prezzo_di_listino;

    function __construct($id, $nome, $descrizione, $prezzo_di_listino){
        $this->id = $id;
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->prezzo_di_listino = $prezzo_di_listino;
    }

    function setId($id){
        $this->id = $id;
    }

    function getId(){
        return $this->id;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function getNome(){
        return $this->nome;
    }

    function setDescrizione($descrizione){
        $this->descrizione = $descrizione;
    }

    function getDescrizione(){
        return $this->descrizione;
    }

    function setprezzo_di_listino($prezzo_di_listino){
        $this->prezzo_di_listino = $prezzo_di_listino;
    }

    function getPrezzo_di_listino(){
        return $this->prezzo_di_listino;
    }
}