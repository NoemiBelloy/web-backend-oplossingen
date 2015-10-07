<?php
    $artikels = array (
        array ("titel" => "Mensen vormen vredesteken in Central Park", "paragraaf" => "Zo'n 2.000 mensen hebben gisteren in Central Park in New York het vredesteken gevormd. Het initiatief ging uit van Yoko Ono, de weduwe van de vermoorde Beatle John Lennon, die deze week 75 jaar zou geworden zijn.", "afbeelding" => "afbeeldingen/artikel1.jpg", "beschrijving" => "Foto van het vredesteken dat gemaakt is in central park" ),
        array("titel" => "Pasgeboren baby uit flat New York gegooid", "paragraaf" => "Een net geboren baby is uit een flat in de New Yorkse wijk de Bronx gegooid. Het meisje leefde nog toen het werd gevonden maar al snel werd het overlijden vastgesteld. De navelstreng zat nog aan het kind vast.", "afbeelding" => "afbeeldingen/artikel2.jpg", "beschrijving" => "Foto van de gearresteerde moeder die haar kind uit het raam gooide" ),
         array("titel" => "Tom Cruise betaalde het huwelijk van zijn dochter", "paragraaf" => "Isabella, de adoptiedochter van Tom Cruise en Nicole Kidman, stapte onlangs in het huwelijksbootje. Tom en Nicole waren niet uitgenodigd. Toch betaalde Tom het huwelijk.", "afbeelding" => "afbeeldingen/artikel3.jpg", "beschrijving" => "foto van tom cruise" )
        );

?>

<!doctype html>
<html>
    <head>
        <title>Get</title>
        <style>
        
            .box {
                width: 300px;
                height: 400px;
                border: 1px solid #81D8D0;
                background-color: #81D8D0;
                margin: 10px;
                padding: 10px;
                float: left;
            }
            
            img {
                width: 75%;   
            }
            
            
        
        </style>
    </head>
    
    <body>
        <h1>Oplossing get</h1>
        <h2>De krant van vandaag</h2> <hr> <!-- begrijp niet vanaf get -->
            <?php foreach ( $artikels as $id => $artikel ): ?>
                <div class="box">
                <article>
                    <h3><?= $artikel["titel"] ?></h3>
                    <img src="<?= $artikel["afbeelding"]?>" alt= "<?= $artikel["beschrijving"] ?>">
                    <p><?= $artikel["paragraaf"] ?></p>
                    <a href="oplossing-get.php?id=">Lees meer</a>
                </article>
                </div>    
            <?php endforeach ?>
    </body>
</html>