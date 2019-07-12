<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "bredest3";

try {
  $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
  $pdo = new PDO($dsn, $dbUser, $dbPassword);
} catch(PDOException $e) {
  echo "Bredest Database Connection Failed: " . $e->getMessage();
}





?>