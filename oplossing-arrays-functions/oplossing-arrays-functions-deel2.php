<?php
    $dieren = array("zebra", "hond", "paard", "koe", "kat", "leeuw", "tijger", "olifant", "wolf", "varken");
    sort($dieren);
    $zoogdieren = array("hert", "giraf", "das");
    $dierenLijst = array_merge($dieren, $zoogdieren);    
    $aantalDieren = count($dieren);
    $teZoekenDier = "hond";
    $gevonden = in_array($teZoekenDier, $dieren);
    $tekst = "";
        
    if ($gevonden)
    {
        $tekst = "Het dier is gevonden" ;  
    }
    else 
    {
        $tekst = "Het dier is niet gevonden" ;  
    }


?>

<!doctype html>
<html>
    <head>
        <title>Arrays functions deel 2</title>
    </head>
    
    <body>
        <h1>Oplossing arrays functions deel 1</h1>
        <p>Het aantal dieren is <?= $aantalDieren ?></p>
        <p> <?= $tekst ?> </p>
        <p> De alfabetische dieren: <?= var_dump ($dieren) ?> </p>
        <p> De volledige dierenlijst: <?= var_dump ($dierenLijst) ?></p>

    </body>
</html>