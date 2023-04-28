<?php
/**
 * DB credentials configuration file
 * This config file is required to establish a PHP PDO connection to the DB
 */
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "apjdatabase";
$dsn = "mysql:host=$servername;dbname=$dbname";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);