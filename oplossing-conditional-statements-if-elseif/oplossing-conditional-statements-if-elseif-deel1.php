<?php
    $getal = 39;
    $string = "";

    if (0 <= $getal && $getal < 10)
    {
        $string = "Het getal ligt tussen 0 en 10"; 
    }

    else if (10 <= $getal && $getal < 20)
    {
        $string = "Het getal ligt tussen 10 en 20";
    }

    else if (20 <= $getal && $getal < 30)
    {
        $string = "Het getal ligt tussen 20 en 30";
    }

    else if (30 <= $getal && $getal < 40)
    {
        $string = "Het getal ligt tussen 30 en 40";
    }

    else if (40 <= $getal && $getal < 50)
    {
        $string = "Het getal ligt tussen 40 en 50";
    }

    else if (50 <= $getal && $getal < 60)
    {
        $string = "Het getal ligt tussen 50 en 60";
    }

    else if (60 <= $getal && $getal < 70)
    {
        $string = "Het getal ligt tussen 60 en 70";
    }

    else if (70 <= $getal && $getal < 80)
    {
        $string = "Het getal ligt tussen 70 en 80";
    }

    else if (80 <= $getal && $getal < 90)
    {
        $string = "Het getal ligt tussen 80 en 90";
    }

    else if (90 <= $getal && $getal < 100)
    {
        $string = "Het getal ligt tussen 90 en 100";
    }

    else 
    {
        $string = "Het getal is niet gekend";
    }

    $omgekeerdeString = strrev($string);


?>

<!doctype html>
<html>
    <head>
        <title>conditional statements: if elseif deel 1</title>
    </head>
    
    <body>
        <h1>Oplossing conditional statements: if elseif deel 1</h1>
        <p> <?= $string ?> </p>
        <p> <?= $omgekeerdeString ?> </p>

    </body>
</html>