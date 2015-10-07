<?php

	$text	=	file_get_contents( 'text-file.txt' );
    $textChars = str_split($text);
    rsort($textChars);
    $reverse = array_reverse($textChars);
    

    $tellerArray = array();

	foreach($reverse as $value)
	{
		if ( isset ( $tellerArray[ $value ] ) )
		{
			++$tellerArray[ $value ];
		}
		else
		{
			$tellerArray[ $value ] = 1;
		}
		
	}

?>
	

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Oplossing foreach: deel1</title>
    </head>
    <body>
		
		<h1>Oplossing foreach: deel1</h1>
        <p>
           Array van Z naar A
		<pre><?php //var_dump ( $textChars ) ?></pre>

		  Array reversed
		<pre><?php //var_dump ( $reverse ) ?></pre>

		Array reversed aantal
		<pre><?php var_dump ( $tellerArray ) ?></pre> 
        </p>

    </body>
</html>