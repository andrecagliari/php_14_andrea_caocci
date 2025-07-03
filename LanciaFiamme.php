<?php
require_once __DIR__ . '/SpallaSinistra.php';

class LanciaFiamme extends SpallaSinistra {
    public static $count = 0;

    public function __construct() {
        self::$count++;
    }

    public function shoulder2() {
        echo "🔥 Lanciafiamme attivato!\n";
    }
}
