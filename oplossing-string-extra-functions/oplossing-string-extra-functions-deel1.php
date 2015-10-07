<?php
    $fruit = "kokosnoot";
    $lengteFruit = strlen($fruit);
    $letter = "o";
    $positieO = strpos($fruit, $letter);

?>

<!doctype html>
<html>
    <head>
        <title>string extra functions deel 1</title>
    </head>
    
    <body>
        <h1>Oplossing string extra functions: deel 1</h1>
        <p>woord: <?= $fruit ?></p>
        <p>aantal karakters: <?= $lengteFruit ?></p>
        <p>positie eerste o: <?= $positieO ?></p>

    </body>
</html>