<?php

include_once('Dolgozo.php');
$mari = new Dolgozo('Pere Mária', 'Szeged', 367);
echo $mari->tel . "\n";
echo $mari->lekerNev();

echo Dolgozo::$alap;

Dolgozo::kiirAlap();