<?php
require_once __DIR__ . '/Gambe.php';

class Propulsori extends Gambe {
    public static $count = 0;

    public function __construct() {
        self::$count++;
    }

    public function move() {
        echo "🦿 Volo attivo con i propulsori!\n";
    }
}
