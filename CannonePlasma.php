<?php
require_once __DIR__ . '/BraccioDestro.php';

class CannonePlasma extends BraccioDestro {
    public static $count = 0;

    public function __construct() {
        self::$count++;
    }

    public function attack1() {
        echo "💥 Sparo con il cannone al plasma!\n";
    }
}
