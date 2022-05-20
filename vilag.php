<?php

include_once('Allat.php');
include_once('Medve.php');
include_once('Mernok.php');

$mici = new Allat();
$mici->mozog();

$maci = new Medve();
$maci->hang();

$kati = new Mernok("Kiss Katalin", "Szeged", 350);
echo $kati->nev;
echo $kati->diploma;
echo $kati->fiz;