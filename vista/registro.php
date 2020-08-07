<?php 
include 'conexion.php';

$usuario = $_POST['user'];
$emailuser = $_POST['email'];
$passworduser = $_POST['pass'];

$sql = "INSERT INTO myusers (username, password, email)
VALUES ($usuario, $passworduser, $emailuser)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// header('Location: ./panel/dashboard.php');

$conn->close();

header('Location: ./panel.php');
?>
