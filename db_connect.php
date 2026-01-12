<?php
$servername = "localhost";
$username = "noorgeec_wb";
$password = "Pf_wb_12-30";
$dbname = "noorgeec_pf";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
