<?php
require_once('Articolo.php');

class Negozio implements JsonSerializable{
    protected $nome;
    protected $telefono;
    protected $indirizzo;
    protected $url;
    protected $p_iva;
    protected $articoli = [];

    function __construct(){
        $this->nome = "Negozio-1";
        $this->telefono = 123;
        $this->inidirizzo = "Via negozio";
        $this->url = "nfal";
        $this->p_iva = 213;
        
        $this->aggiungiArticolo(new Articolo(1, "Articolo1", "Descrizione1", 11));
        $this->aggiungiArticolo(new Articolo(2, "Articolo2", "Descrizione2", 11));
        $this->aggiungiArticolo(new Articolo(3, "Articolo3", "Descrizione3", 11));
        
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

    function aggiungiArticolo($articoli){
        return array_push($this->articoli, $articolo);
    }

    function getArticolo(){
        $array = [];
        foreach ($this->articolo as $d) {
            if ($d instanceof Articolo) {
                array_push($array, $d->getIdentificativo());
            }
        }
        return $array;
    }

    function getProdotto($id)
    {
        foreach ($this->dispositivi as $d) {
            if ($d instanceof Articolo && $d->getNome() == $nome) {
                return $d;
            }
        }
        return null;
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
        $attrs = [];
        $class_vars = get_class_vars(get_class($this));
        foreach ($class_vars as $name => $value) {
            $attrs[$name] = $this->{$name};
        }
        return $attrs;
    }

}