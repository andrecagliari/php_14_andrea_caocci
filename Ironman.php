<?php
require_once __DIR__ . '/BraccioDestro.php';
require_once __DIR__ . '/BraccioSinistro.php';
require_once __DIR__ . '/Gambe.php';
require_once __DIR__ . '/SpallaDestra.php';
require_once __DIR__ . '/SpallaSinistra.php';

class Ironman {
    public static $counter = 0;

    public $braccioDestro;
    public $braccioSinistro;
    public $gambe;
    public $spallaDestra;
    public $spallaSinistra;

    public function __construct(
        BraccioDestro $braccioDestro,
        BraccioSinistro $braccioSinistro,
        Gambe $gambe,
        SpallaDestra $spallaDestra,
        SpallaSinistra $spallaSinistra
    ) {
        $this->braccioDestro = $braccioDestro;
        $this->braccioSinistro = $braccioSinistro;
        $this->gambe = $gambe;
        $this->spallaDestra = $spallaDestra;
        $this->spallaSinistra = $spallaSinistra;

        self::$counter++;
    }
}
