<?php
require_once __DIR__ . '/BraccioSinistro.php';

class LamaLaser extends BraccioSinistro {
    public function attack2() {
        echo "⚔️ Attacco con la lama laser!\n";
    }
}
