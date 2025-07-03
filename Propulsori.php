<?php
require_once __DIR__ . '/Gambe.php';

class Propulsori extends Gambe {
    public function move() {
        echo "🦿 Decollo attivo con i propulsori!\n";
    }
}
