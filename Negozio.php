<?php
class Negozio implements JsonSerializable{
    
    protected $nome;
    protected $telefono;
    protected $indirizzo;
    protected $url;
    protected $p_iva;

    protected $Ordini = array();

    public function __construct($nome, $telefono, $indirizzo, $url, $p_iva) {
        $this->nome = $nome;
        $this->$telefono = $telefono;
        $this->$indirizzo = $indirizzo;
        $this->$url = $url;
        $this->$p_iva = $p_iva;
    }
    
    public function addOrdine($ordine){
        array_push($this-> Ordini, $ordine);
    }

    public function jsonSerialize(){
        return[
            'nome' => $this->nome,
            'telefono' => $this->telefono,
            'indirizzo' => $this->indirizzo,
            'url' => $this->url,
            'partita IVA' => $this->p_iva
        ];
    }
}