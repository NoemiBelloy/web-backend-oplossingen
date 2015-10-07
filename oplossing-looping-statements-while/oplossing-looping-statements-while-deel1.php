<?php
    $maxGetal = 100;
    $getal = 0;
    $getallen = array();
    $reeks = array();
    $selectie = array();


    while ($getal <= $maxGetal)
    {
        $getallen[] = $getal; // oplossing: getallen[] = $getal;
        $getal++; // oplossing: ++$getal
    }

    $reeks	=	implode( ', ', $getallen );

    $getal = 0;

    while ($getal <= $maxGetal)
    {
        if (40 < $getal && $getal < 80 && $getal % 3 == 0)
        {
            $selectie[] = $getal;
        }
        $getal++;
    }

    $selectie = implode( ', ', $selectie)



?>

<!doctype html>
<html>
    <head>
        <title>Looping statements while: deel 1</title>
    </head>
    
    <body>
        <h1>Oplossing looping statements while</h1>
        <p>
            Getallen van 0 tot 100: <?= var_dump ($reeks) ?>
        </p>
        <p>
            Getallen tussen 40 en 80 die deelbaar zijn door 3: <?= var_dump ($selectie) ?>
        </p>

    </body>
</html>