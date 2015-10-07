<?php
    $getal = 2;
    $dag = "";
    if ($getal ==1)
    {
        $dag = "maandag";
    }
    else if ($getal ==2)
    {
        $dag = "dinsdag";   
    }
    else if ($getal ==3)
    {
        $dag = "woensdag";   
    }
    else if ($getal ==4)
    {
        $dag = "donderdag";
    }
    else if ($getal ==5)
    {
        $dag = "vrijdag";   
    }
    else if ($getal ==6)
    {
        $dag = "zaterdag";
    }
    else if ($getal ==7)
    {
        $dag = "zondag";   
    }


?>

<!doctype html>
<html>
    <head>
        <title>conditional statements: if deel 1</title>
    </head>
    
    <body>
        <h1>Oplossing conditional statements: if deel 1</h1>
        <p>De dag is <?= $dag ?></p>


    </body>
</html>