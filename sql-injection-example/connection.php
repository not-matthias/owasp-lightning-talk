<?php

require 'connection_config.php';

$conn = new mysqli($server_name, $username, $password, $dbName);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}