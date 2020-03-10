<?php

require_once(__DIR__.'/trait/spesespedizioni.php');



class Birra
{
  use SpeseSpedizioni;
  public $codice;
  public $tipo;
  public $marca;
  public $cl;
  public $alcol;
  public $prezzo;
  public $sconto;
  public $prezzoScontato;

  function __construct($_codice, $_tipo, $_marca)
  {
    $this->codice = $_codice;
    $this->tipo = $_tipo;
    $this->marca = $_marca;
  }
  public function scontoBirra(){
    $this->prezzoScontato = $this->prezzo - $this->prezzo * $this->sconto / 100;
    return $this->prezzoScontato;
  }
  public function alcolLevel()
  {
    if($this->alcol > 3){
      return $this->quantitAlcol = "elevata quantità di alcol";
    }else{
      return $this->quantitAlcol = "quantità di alcol moderata";
    }
  }
}


class Artigianale extends birra
{
  public $aroma;
  public $provenienza;
}
