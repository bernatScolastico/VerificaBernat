<?php
class OrdineOnline extends Ordine implements JsonSerializable {
    
    protected $indirizzo_IP;
    protected $codice_di_autorizzazione;

    public function __construct($num_ordine, $data, $imp_tot, $IP, $cod) {
        parent::__construct($num_ordine, $data, $imp_tot);
        $this -> indirizzo_IP = $IP;
        $this -> codice_di_autorizzazione = $cod;
    }

    public function jsonSerialize(){
        return[
            'numero_ordine' => $this->numero_ordine,
            'data' => $this->data,
            'importo_totale' => $this->importo_totale,
            'indirizzo_IP' => $this->indirizzo_IP,
            'codice_di_autorizzazione' => $this->codice_di_autorizzazione,
        ];
    }
}