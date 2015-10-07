<?php
    $getal = 2;
    $dag = "";

    switch ($getal)
    {
        case 1:
            $dag = "maandag";
            break;
        case 2:
            $dag = "dinsdag";   
            break;
        case 3:
            $dag = "woensdag";   
            break;
        case 4:
            $dag = "donderdag";
            break;
        case 5:
            $dag = "vrijdag";   
            break;
        case 6:
            $dag = "zaterdag";
            break;
        case 7:
            $dag = "zondag";   
            break;
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