<?php
class Ordine implements JsonSerializable{
    
    protected $numero_ordine;
    protected $data;
    protected $importo_totale;

    protected $articoli_venduti = array();

    public function __construct($num_ordine, $data, $importo_tot){
        $this -> numero_ordine = $num_ordine;
        $this -> data = $data;
        $this -> importo_totale = $importo_tot;
    }

    public function get_numero_ordine(){
        return $this -> numero_ordine;
    }
    public function get_data(){
        return $this -> data;
    }
    public function get_importo_totale(){
        return $this ->importo_totale;
    }

    public function addArticolo($articolo){
        array_push($this->articoli_venduti, $articolo);
    }

    public function jsonSerialize(){
        return[
            'numero_ordine' => $this->numero_ordine,
            'data' => $this->data,
            'importo_totale' => $this->importo_totale,
        ];
    }
}