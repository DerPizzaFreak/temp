<?php
session_start(); // Session starten

// Überprüfen, ob ein Benutzername und ein Passwort gesendet wurden
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hier sollten Sie eine Datenbankverbindung herstellen und die Benutzerdaten überprüfen.
    // Dieser Teil hängt von Ihrer tatsächlichen Implementierung ab.

    if (isset($_POST['login'])) {
        // Implementieren Sie hier den Login-Prozess
        // Überprüfen Sie, ob der Benutzer existiert und das Passwort korrekt ist.
        // Sie können eine Datenbankabfrage verwenden.

        // Beispiel:
        if ($username == 'demo' && $password == 'pass') {
            $_SESSION['username'] = $username; // Benutzer in der Sitzung speichern
            echo('<!DOCTYPE html>
			   <html>
				   <head>
					   <title>Reg/Log</title>
				   </head>
				   <body>
					   <h1 style="color: green;">success</h1>
					   <a href="index.html">Back</a>
				   </body>
			   </html>');
            exit();
        } else {
            // Login fehlgeschlagen
            echo('<!DOCTYPE html>
			   <html>
				   <head>
					   <title>Reg/Log</title>
				   </head>
				   <body>
					   <h1 style="color: red;">fail</h1>
					   <a href="index.html">Back</a>
				   </body>
			   </html>');
            exit();
        }
    } elseif (isset($_POST['register'])) {
        // Implementieren Sie hier den Registrierungsprozess
        // Fügen Sie den Benutzer in die Datenbank ein.

        // Beispiel:
        // Hier sollten Sie die Überprüfung der Benutzerdaten und die Datenbankabfrage einfügen.
        // Wenn die Registrierung erfolgreich ist, können Sie den Benutzer in die Datenbank einfügen.
        // Danach leiten Sie den Benutzer zur Login-Seite weiter.
    }
} else {
    // Ungültige Anfrage, zurück zum Login-Formular
    
            echo('<!DOCTYPE html>
			   <html>
				   <head>
					   <title>Reg/Log</title>
				   </head>
				   <body>
					   <h1 style="color: red;">fail 2</h1>
					   <a href="index.html">Back</a>
				   </body>
			   </html>');
            exit();
}
?>
