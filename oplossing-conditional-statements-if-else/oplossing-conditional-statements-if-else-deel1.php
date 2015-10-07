<?php
    $jaar = 2012;
    $schrikkeljaarGetal = 4;
    $ookSchrikkeljaarGetal = 400;
    $geenSchrikkeljaarGetal = 100;
    $uitkomstSchrikkeljaar = $jaar % $schrikkeljaarGetal;
    $uitkomstOokSchrikkeljaar = $jaar % $ookSchrikkeljaarGetal;
    $uitkomstGeenSchrikkeljaar = $jaar % $geenSchrikkeljaarGetal;
    $schrikkeljaar ="";


    if (($uitkomstSchrikkeljaar == 0 && $uitkomstGeenSchrikkeljaar != 0) || $uitkomstOokSchrikkeljaar ==0)
    {
        $schrikkeljaar = "een";
    }
    else
    {
        $schrikkeljaar = "geen";       
    }


?>

<!doctype html>
<html>
    <head>
        <title>conditional statements: if else deel 1</title>
    </head>
    
    <body>
        <h1>Oplossing conditional statements: if else deel 1</h1>
        <p>Het jaar <?= $jaar ?> is <?= $schrikkeljaar ?> schrikkeljaar. </p>


    </body>
</html>