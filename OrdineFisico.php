<?php
class OrdineFisico extends Ordine implements JsonSerializable {
    
    protected $pagamento;

    public function __construct($num_ordine, $data, $imp_tot, $pagamento) {
        parent::__construct($num_ordine, $data, $imp_tot);
        $this -> pagamento = $pagamento;
    }

    public function jsonSerialize(){
        return[
            'numero_ordine' => $this->numero_ordine,
            'data' => $this->data,
            'importo_totale' => $this->importo_totale,
            'pagamento' => $this->pagamento
        ];
    }
}