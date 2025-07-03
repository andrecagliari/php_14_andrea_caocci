<?php
require_once __DIR__ . '/CannonePlasma.php';
require_once __DIR__ . '/LamaLaser.php';
require_once __DIR__ . '/Propulsori.php';
require_once __DIR__ . '/Ironman.php';

// Funzione per creare un Ironman casuale
function creaIronmanRandom() {
    $bracciDestri = [new CannonePlasma()];
    $bracciSinistri = [new LamaLaser()];
    $gambe = [new Propulsori()];

    return new Ironman(
        $bracciDestri[array_rand($bracciDestri)],
        $bracciSinistri[array_rand($bracciSinistri)],
        $gambe[array_rand($gambe)]
    );
}

// Numero casuale tra 1 e 100
$numeroIronman = rand(1, 100);

// Crea esercito (senza output)
for ($i = 1; $i <= $numeroIronman; $i++) {
    creaIronmanRandom();
}

// Messaggio finale
echo "🦾 Sono stati creati $numeroIronman Ironman.\n";
echo "🦾 Numero totale di Ironman: " . Ironman::$counter . "\n";