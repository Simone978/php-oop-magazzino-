<?php

require_once('birra.php');

$finkbrau = new Birra('22345','bionda','finkbrau');
  $finkbrau->cl = 66;
  $finkbrau->alcol = 5;
  $finkbrau->prezzo = 39.9;
  var_dump($finkbrau);

$heineken = new Birra('33542','bionda','heineken');
  $heineken->cl = 33;
  $heineken->alcol = '4,9%';
  $heineken->prezzo = 60;
  var_dump($heineken);

$peroni = new Birra('99786','bionda','peroni');
  $peroni->cl = 66;
  $peroni->alcol = 2;
  $peroni->prezzo = 90;
  $peroni->alcolLevel();
  var_dump($peroni);

$Ale = new Artigianale('33454','bionda','Ale');
  $Ale->cl = 75;
  $Ale->alcol = 6;
  $Ale->prezzo = 7.00;
  $Ale->aroma = 'miele';
  $Ale->provenienza = 'Avola (SR)';
  $Ale->sconto = 3;
  $Ale->scontoBirra();
  var_dump($Ale);

$Gladiatore = new Artigianale('44645','nera','Coffee Stout');
  $Gladiatore->cl = 75;
  $Gladiatore->alcol = 8;
  $Gladiatore->prezzo = 3.50;
  $Gladiatore->aroma = 'caffè';
  $Gladiatore->provenienza = 'Roma';
  $Gladiatore->alcolLevel();
  var_dump($Gladiatore);
