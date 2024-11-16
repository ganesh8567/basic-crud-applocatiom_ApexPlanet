<?php
$host = 'localhost';
$user = 'root';
$password = 'Ganesh@8520';
$dbname = 'blog';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
