<?php
require_once 'config/Database.php';

$database = new Database();

$connection = $database->connect();

echo "Database connection successful!";