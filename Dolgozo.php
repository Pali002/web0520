<?php
include_once('Szemely.php');

class Dolgozo extends Szemely {
    public $fiz;
    public static $alap = 300;
    public function __construct($nev, $tel, $fiz) {
        $this->nev = $nev;
        $this->tel = $tel;
        $this->fiz = $fiz;
    }
    public static function kiirAlap() {
        echo self::$alap;
    }
}