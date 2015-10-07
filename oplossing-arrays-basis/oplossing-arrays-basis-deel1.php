<?php
    $dieren = array("zebra", "hond", "paard", "koe", "kat", "leeuw", "tijger", "olifant", "wolf", "varken");

    $dieren[1]= "zebra";
    $dieren[2]= "hond";
    $dieren[3]= "paard";
    $dieren[4]= "koe";
    $dieren[5]= "kat";
    $dieren[6]= "leeuw";
    $dieren[7]= "tijger";
    $dieren[8]= "olifant";
    $dieren[9]= "wolf";
    $dieren[10]= "varken";

    $voertuigen = array("landvoertuigen" => array("vespa", "fiets"), "watervoertuigen" => array("surfplank", "vlot", "schoener", "driemaster"), "luchtvoertuigen" => array("luchtballon", "helicopter", "B52"))
        


?>

<!doctype html>
<html>
    <head>
        <title>Arrays basis deel 1</title>
    </head>
    
    <body>
        <h1>Oplossing arrays basis deel 1</h1>
        <pre><?= var_dump($voertuigen); ?></pre>

    </body>
</html>