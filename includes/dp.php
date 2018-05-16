<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$database = "test databas";

$mysqli = new mysqli($db_host, $db_user, $db_password, $database);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>