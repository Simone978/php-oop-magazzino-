<?php

class Birra
{
  public $codice;
  public $tipo;
  public $marca;
  public $cl;
  public $alcol;
  public $prezzo;

  function __construct($_codice, $_tipo, $_marca)
  {
    $this->codice = $_codice;
    $this->tipo = $_tipo;
    $this->marca = $_marca;
  }
}
