<?php

require_once('birra.php');

$finkbrau = new Birra('22345','bionda','finkbrau');
  $finkbrau->cl = 66;
  $finkbrau->alcol = '5%';
  $finkbrau->prezzo = 39;
  var_dump($finkbrau);

$heineken = new Birra('33542','bionda','heineken');
  $heineken->cl = 33;
  $heineken->alcol = '4,9%';
  $heineken->prezzo = 60;
  var_dump($heineken);

$peroni = new Birra('99786','bionda','peroni');
  $peroni->cl = 66;
  $peroni->alcol = '4,7%';
  $peroni->prezzo = 90;
  var_dump($peroni);
