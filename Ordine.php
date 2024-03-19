<?php
class Ordine implements JsonSerializable{
    
    protected $numero_ordine,
    protected $data,
    protected $importo_totale,

    protected $articoli_venduti = array();

    public function __construct($num_ordine, $data, $importo_tot){
        $this -> numero_ordine = $num_ordine;
        $this -> data = $data,
        $this -> importo_totale = $importo_tot,
    }

    public function addArticolo($articolo){
        array_push($this->articoli_venduti, $articolo);
    }
}