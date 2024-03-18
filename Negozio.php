<?php
require_once('Articolo.php');

class Negozio implements JsonSerializable{
    protected $nome;
    protected $telefono;
    protected $indirizzo;
    protected $url;
    protected $p_iva;
    protected $articoli = [];

    function __construct($nome, $telefono, $indirizzo, $url, $p_iva, $articoli){
        $this->nome = $nome;
        $this->telefono = $telefono;
        $this->indirizzo = $indirizzo;
        $this->url = $url;
        $this->p_iva = $p_iva;
    } 

    function setNome($nome){
        $this->nome = $nome;
    }

    function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    function setIndirizzo($nome){
        $this->indirizzo = $indirizzo;
    }

    function setUrl($url){
        $this->url = $url;
    }

    function setP_iva($p_iva){
        $this->p_iva = $p_iva;
    }

    function setArticolo($articolo){
        $this->articolo = $articolo;
    }

    function getNome(){
        return $this->nome;
    }

    function getTelefono(){
        return $this->telefono;
    }

    function getIndirizzo(){
        return $this->indirizzo;
    }

    function getUrl(){
        return $this->url;
    }

    function getP_iva(){
        return $this->p_iva;
    }

    public function __toString()
    {
        return "Nome: " . $this->nome . " Telefono: " . $this->telefono . " Indirizzo: " . $this->indirizzo . " URL: " . $this->url . " Partita iva: " . $this->p_iva;
    }

    public function jsonSerialize()
    {
        return [
            'nome' => $this->getNome(),
            'telefono' => $this->getTelefono(),
            'Indirizzo' => $this->getIndirizzo(),
            'Url' => $this->getUrl(),
            'Partita iva' => $this->getP_iva(),
        ];
    }

}