<?php

	$md5HashKey 	= 	'd1fa402db91a7a93c4f414b8278ce073';
	$needle1			=	"2";
	$needle2			=	"8";
	$needle3			=	"a";

	function aantal1( $md5HashKey, $needle1 )
	{
        global $md5HashKey;

		$haystack = $md5HashKey;

		$haystackCount =  strlen( $haystack );

		$needleCount = substr_count ( $haystack, $needle1 );

		$procent1 = ( $needleCount / $haystackCount ) * 100;

		return $procent1;
	}

	function aantal2( $needle2 )
	{
        $haystack = $GLOBALS['md5HashKey'];
        
		$haystackCount =  strlen( $haystack );

		$needleCount = substr_count ( $haystack, $needle2 );

		$procent2 = ( $needleCount / $haystackCount ) * 100;

		return $procent2;
	}

	function aantal3( $needle3 )
	{
		$haystack = $GLOBALS['md5HashKey'];

		$haystackCount =  strlen( $haystack );

		$needleCount = substr_count ( $haystack, $needle3 );

		$procent3 = ( $needleCount / $haystackCount ) * 100;

		return $procent3;
	}


	$manier1    	=	aantal1( $md5HashKey, $needle1 );
	$manier2    	=	aantal2( $needle2 );
	$manier3    	=	aantal3( $needle3 );
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Oplossing functies gevorderd: deel1</title>
	</head>
	<body>
		
		<h1>Oplossing functies gevorderd: deel1</h1>

		<p>Het karakter "<?= $needle1?>" komt <?= $manier1 ?>% voor in de string "<?= $md5HashKey ?>"</p>
        <p>Het karakter "<?= $needle2?>" komt <?= $manier2 ?>% voor in de string "<?= $md5HashKey ?>"</p>
        <p>Het karakter "<?= $needle3?>" komt <?= $manier3 ?>% voor in de string "<?= $md5HashKey ?>"</p>

	</body>
</html>