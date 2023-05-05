<?php
session_start();

define('DataHost', 'localhost');
define('DataUser', '');
define('DataName', '');
define('DataPass', '');

try
{
	$connect = new PDO("mysql:host=".DataHost."; dbname=".DataName, DataUser, DataPass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Connected';
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
?>