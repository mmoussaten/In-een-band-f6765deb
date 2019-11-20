<?php

$albums = array('Citizen of glass' => 4.5,
    'Night'=> 9,
    'New Eyes'=> 5,
    'Strange Trails'=> 10 ,  );

$totaal = 0;

   echo "Het Albumoverzicht: " . PHP_EOL;
   foreach ($albums as $key => $value) {
    echo $key . "kost: €" . $value . PHP_EOL;
    $totale = $totaal + $value;
}
   echo "Het totaalbedrag van alle albums is: €" . $totale . PHP_EOL;
   echo "De gemiddelde prijs van alle albums is: €" . ($totale / 4). PHP_EOL;

