<?php
$servername = "192.185.4.144";
$database = "diasam_formulario";
$username = "diasam_admin";
$password = "du0st!zOgUe3";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>