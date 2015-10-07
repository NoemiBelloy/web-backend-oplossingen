<?php
    
    $boodschappenlijstje = array("watermeloen", "smoothie", "appels", "citroen", "wraps");
    

?>

<!doctype html>
<html>
    <head>
        <title>Looping statements while: deel 2</title>
    </head>
    
    <body>
        <h1>Oplossing looping statements while: deel 2</h1>
        <ul>
			<?php $boodschapCounter 		= 	0; // gekopiëert uit oplossing --> uitleg vragen
			?>
			<?php while( isset( $boodschappenlijstje [ $boodschapCounter ] ) ):  ?>
				
				<li><?= $boodschappenlijstje [ $boodschapCounter ] ?></li>
				

				<?php $boodschapCounter++ ?>
			<?php endwhile ?>
		</ul>


    </body>
</html>