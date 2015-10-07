<?php

	function berekenSom( $getal1, $getal2 ) 
	{
	
		$uitkomst = $getal1 + $getal2;

		return $uitkomst;
	}

	function vermenigvuldig( $getal1, $getal2 ) 
	{
	
		$uitkomst = $getal1 * $getal2;

		return $uitkomst;
	}

	function isEven( $getal1 ) 
	{
	
		if ( $getal1%2 > 0 )
		{
			return false;
		}

		return true;
	}

	
	$som 		=	berekenSom( 9, 11);
	$product 	= 	vermenigvuldig( 9, 11);
	$evenGetal 	=	9;
	$evenheid	=	isEven( $evenGetal );

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Oplossing functies: deel1</title>
	</head>
	<body>

		<h1>Oplossing functies: deel1</h1>

		<p>9 + 11 =  <?= $som?></p>
		<p>9 * 11 =  <?php echo $product?></p>

		<?php if ( $evenheid ): ?>

			<p>Het getal <?= $evenGetal ?> is even</p>
        <?php else: ?>

			<p>Het getal <?= $evenGetal ?> is oneven</p>
		<?php endif ?>

		
		</ul>


	</body>
</html>