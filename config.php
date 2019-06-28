<?php
session_start();

global $pdo;
try {
	$pdo = new PDO("mysql:dbname=sistemagit;host=localhost", "root", "vertrigo");
} catch(PDOException $e) {
	echo "FALHOU: ".$e->getMessage();
	exit;
}
?>