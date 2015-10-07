<?php
$voornaam = "Noemi";
$achternaam = "Belloy";
$volledigeNaam = $voornaam." ".$achternaam;

?>

<!doctype html>
<html>
    <head>
        <title>string concatenate</title>
    </head>
    
    <body>
        <h1>Oplossing string concatenate: deel 1</h1>
        <p>naam: <?= $volledigeNaam ?> </p>
        <p>aantal karakters: <?= strlen($volledigeNaam) ?></p>
    </body>
</html>