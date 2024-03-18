<?php
require_once('Negozio');

class Oggetti implements JsonSerializable {
    protected $negozio = [];
    protected $articolo = [];

    public function __contruct(){
        $negozio1 = new Negozio ("nomeNegozio", 1, "via Negozio", "url negozio", 2);
        array_push($this->negozio1, $negozio);
        
        $articolo1 = new Articolo (1, "Articolo 1", "descrizione 1", 11);
        $articolo2 = new Articolo (2, "Articolo 2", "descrizione 2", 22);
        array_push($this->articolo1, $articoli);
        array_push($this->articolo2, $articoli);
    }

    public function jsonSerialize() {
        $attrs = [];
        $class_vars = get_class_vars(get_class($this));
        foreach ($class_vars as $name => $value) {
            $attrs[$name]=$this->{$name};
        }
        return $attrs;
    }

    public function jsonNegozio(){
        return $this->negozio;
    }

    public function jsonArticolo(){
        return $this->articolo;
    }
} 