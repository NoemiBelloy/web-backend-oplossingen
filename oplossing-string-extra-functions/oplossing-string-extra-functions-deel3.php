<?php
    $lettertje = "e";
    $cijfertje = 3;
    $langsteWoord= "zandzeepsodemineralenwatersteenstralen";
    $nieuwWoord = str_replace ($lettertje, $cijfertje, $langsteWoord);

?>

<!doctype html>
<html>
    <head>
        <title>string extra functions deel 3</title>
    </head>
    
    <body>
        <h1>Oplossing string extra functions: deel 3</h1>
        <p>nieuw woord: <?= $nieuwWoord ?></p>


    </body>
</html>