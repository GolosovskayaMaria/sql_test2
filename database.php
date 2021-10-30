<?php
$server = 'ogo.devintermedia.net';
$username = 'ejabberd';
$password = 'ejabberd';
$database = 'ejabberd';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
