<?php
    
    $password = "abcd";
    $username = "noemi";
    $message = "Gelieve in te loggen";
    if(isset($_POST['submited']))
    {
        if ($_POST['username'] == $username && $_POST['password'] == $password)
        {
            $message	=	'Welkom';
		}
		else
		{
			$message	=	'Er ging iets mis tijdens het inloggen. Probeer opnieuw.';
		}
    }
    

?>

<!doctype html>
<html>
    <head>
        <title>Post</title>
        <style>
            label, input {
                display: block;
                margin: 5px;    
            }
        </style>
    </head>
    
    <body>
        <h1>Oplossing post</h1>
        <h2>Inloggen</h2>
        
            <form action="oplossing-post.php" method="POST">
        
                <label for="username">gebruikersnaam</label>
				<input type="text" name="username" id="username" placeholder="je gebruikersnaam">
                
                <label for="password">paswoord</label>
                <input type="password" name="password" id="password" placeholder="je paswoord">
                
                <input type="submit" name="submited" value="Verzenden">
        
            </form>
        
         <p>
            <?= $message ?>
        </p>

    </body>
</html>