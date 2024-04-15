<?php
//echo "ciao";

$squadre = [
    'partita_0' => [
    'casa' => 'milano',
    'ospite' => 'bologna',
    'punti_casa' => '2',
    'punti_ospite' => '3',
    ],
    'partita_1' => [
    'casa' => 'genova',
    'ospite' => 'siena',
    'punti_casa' => '1',
    'punti_ospite' => '2',
    ],
    'partita_2' => [
    'casa' => 'agropoli',
    'ospite' => 'salerno',
    'punti_casa' => '5',
    'punti_ospite' => '2',
    ],
    ];



    foreach ($squadre as $partita => $info) {
        echo "<h3>Partita: $partita</h3> <br>";
        echo $info['casa'] . " - " . $info['ospite'] . " | " . $info['punti_casa'] . "-" . $info['punti_ospite'] . "<br>";
    }
?>