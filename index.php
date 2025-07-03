<?php
require_once __DIR__ . '/CannonePlasma.php';
require_once __DIR__ . '/LamaLaser.php';
require_once __DIR__ . '/Propulsori.php';
require_once __DIR__ . '/MissiliGuidati.php';
require_once __DIR__ . '/LanciaFiamme.php';
require_once __DIR__ . '/Ironman.php';

// Crea Ironman casuale
function creaIronmanRandom() {
    return new Ironman(
        new CannonePlasma(),
        new LamaLaser(),
        new Propulsori(),
        new MissiliGuidati(),
        new LanciaFiamme()
    );
}

// Numero casuale da 1 a 100
$numeroIronman = rand(1, 100);

for ($i = 0; $i < $numeroIronman; $i++) {
    creaIronmanRandom();
}

// Riepilogo
echo "🦾 Sono stati creati $numeroIronman Ironman\n";
echo "🔧 Componenti utilizzati:\n";
echo "- CannonePlasma:     " . CannonePlasma::$count . "\n";
echo "- LamaLaser:         " . LamaLaser::$count . "\n";
echo "- Propulsori:        " . Propulsori::$count . "\n";
echo "- MissiliGuidati:    " . MissiliGuidati::$count . "\n";
echo "- LanciaFiamme:      " . LanciaFiamme::$count . "\n";
