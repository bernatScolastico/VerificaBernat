<?php
class Articolo_venduto extends Articolo implements JsonSerializable{
    
    protected $prezzo_di_vendita;
    
    public function __construct($id, $nome, $descrizione, $prezzo_di_listino, $prezzo_di_vendita){
        parent::__construct($id, $nome, $descrizione, $prezzo_di_listino);
        $this -> prezzo_di_vendita = $prezzo_di_vendita;
    }

    public function jsonSerialize(){
        return[
            'id' => $this->id,
            'nome' => $this->nome,
            'descrizione' => $this->descrizione,
            'prezzo_di_listino' => $this->prezzo_di_listino;
            'prezzo_di_vendita' => $this->prezzo_di_vendita;
        ];
    }
}