<?php

$username = "root";
$password = "";
$host = "localhost";
$database = "valorant_players_db";

$data_source_name = "mysql:host=$host;dbname=$database;";
$pdo = new PDO($data_source_name, $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return $pdo;
