<?php

include_once('Dolgozo.php');

class Mernok extends Dolgozo {
    public $diploma = 'nem ismert';
    public function kiirFizetes() {
        return $this->fiz;
    }
}