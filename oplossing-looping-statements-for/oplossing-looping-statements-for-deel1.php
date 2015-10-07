<?php

    $rijen = 10;
    $kolommen = 10;
    
?>

<!doctype html>
<html>
    <head>
        <title>Looping statements for: deel 1</title>
    </head>
    
    <body>
        <h1>Oplossing looping statements for: deel 1</h1>
        <table>
			<?php for ( $rij = 0; $rij < $rijen; ++$rij): ?> <!-- Oplossing bekeken, maar begrepen -->
				<tr>
					<?php for ( $kolom = 0; $kolom < $kolommen; ++$kolom): ?>
						<td>kolom</td>
					<?php endfor ?>
				</tr>
			<?php endfor ?>
		</table>


    </body>
</html>