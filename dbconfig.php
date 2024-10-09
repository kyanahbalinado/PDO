<?php
// Database connection variables
$host = "localhost"; // Host name (server address) where the database is hosted
$user = "root"; // Username used to connect to the database
$password = ""; // Password for the database user
$dbname = "balinado"; // Name of the database to connect to

// Data Source Name (DSN) string for the PDO connection
$dsn = "mysql:host={$host};dbname={$dbname}";

// Create a new PDO (PHP Data Objects) instance to connect to the database
// The PDO object represents a connection between PHP and the database server
$pdo = new PDO($dsn, $user, $password);

// Set the time zone for the database connection to UTC+8:00
$pdo->exec("SET time_zone ='+08:00';");

?>
