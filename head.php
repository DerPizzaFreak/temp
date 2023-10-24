<?php
session_start(); // Session starten

function success($usrname, $pw)
{
	return '<!DOCTYPE html>
			   <html>
				   <head>
					   <title>Reg/Log</title>
				   </head>
				   <body>
					   <h1 style="color: green;">Ihr Nutzername:'.$username.'<br>Ihr Passwort:'.$password.'</h1>
					   <a href="index.html">Back</a>
				   </body>
			   </html>
	   ';
}

function error($fehler)
{
	return '<!DOCTYPE html>
			   <html>
				   <head>
					   <title>Reg/Log</title>
				   </head>
				   <body>
					   <h1 style="color: red;">'.$fehler.'</h1>
					   <a href="index.html">Back</a>
				   </body>
			   </html>
	   ';
}

// Überprüfen, ob ein Benutzername und ein Passwort gesendet wurden
if (isset($_POST['username']) && isset($_POST['password1'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_POST['login'])) {

		// Beispiel Account
        if ($username == 'Test' && $password == 'Passwort') {
			echo(success($username, $password));
        } else {
			die(error('Benutzer nicht vorhanden oder falsches Passwort!'));
        }

    }
	elseif (isset($_POST['register']))
	{
        // kommt noch
    }
}
else
{
    // Ungültige Anfrage, zurück zum Login-Formular
    if (!isset($_POST['username']))
	{
		die(error('Der Benutzername wurde nicht eingegeben!'));
	}
	 elseif (!isset($_POST['password1']))
	 {
		die(error('Das Passwort wurde nicht eingegeben!'));
	}
}
?>
