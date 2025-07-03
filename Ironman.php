<?php
require_once 'BraccioDestro.php';
require_once 'BraccioSinistro.php';
require_once 'Gambe.php';

class Ironman {
    public static $counter = 0;

    public $dx;
    public $sx;
    public $gambe;

    public function __construct(BraccioDestro $dx, BraccioSinistro $sx, Gambe $gambe) {
        $this->dx = $dx;
        $this->sx = $sx;
        $this->gambe = $gambe;

        self::$counter++;
    }

    public function azione($nome) {
        echo "🦾 Ironman $nome in azione:\n";
        $this->dx->attack1();
        $this->sx->attack2();
        $this->gambe->move();
        echo "----------------------------\n";
    }
}
