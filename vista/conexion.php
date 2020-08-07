<?php 
$servername = "localhost";
$username = "admin_hydra";
$password = "hydra0120**";
$dbname = "admin_hydra";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

header('Location: ./dashboard');
?>