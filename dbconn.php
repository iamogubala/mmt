<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mmt";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    echo "Connection failed";
} else {
    echo "Connection successful";
}
