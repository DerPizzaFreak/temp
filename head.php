<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

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
 
 if(isset($_POST['username']))
 {
	 $username = $_POST['username'];
 }
 else
 {
	 die(error('Der username ist nicht vorhanden!'));
 }
 
 if(isset($_POST['password1']))
 {
	 $password = $_POST['password1'];
 }
 else
 {
	 die(error('Das Passwort ist nicht vorhanden!'));
 }
 
 echo(success($username, $password));
 ?>