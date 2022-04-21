<?php
$nombres = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
$suites = ["♦", "♣", "♥", "♠"];

for ($i = 0; $i < count($suites); $i++) {
    for ($j = 0; $j < count($nombres); $j++) {
        $deck[] = ($nombres[$j]) ."-".($suites[$i]);        
    }
}
$subDeck1 = (array_slice($deck, 0, 26));
$subDeck2 = (array_slice($deck, 26, 26));
$shuffleDeck = [];
for ($i = 0; $i <= 25; $i++) {
    $shuffleDeck[] = $subDeck1[$i];   
    $shuffleDeck[] = $subDeck2[$i]; 
}
for ($i = 0; $i <= 51; $i++) {    
    if ($i%13 === 0 ) {
        echo "<br>";
        echo $shuffleDeck[$i] ." ";        
    } else {
        echo $shuffleDeck[$i];
    }
}
