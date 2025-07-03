<?php
require_once __DIR__ . '/BraccioSinistro.php';

class LamaLaser extends BraccioSinistro {
    public static $count = 0;

    public function __construct() {
        self::$count++;
    }

    public function attack2() {
        echo "⚔️ Attacco con la lama laser!\n";
    }
}
