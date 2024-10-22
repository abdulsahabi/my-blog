<?php
// Replace these values with the information provided by your hosting provider
$servername = "localhost"; // Example: "localhost" or a specific domain/IP address
$username = "abdulsah_abdulsah"; // The database user you created
$password = "Tc63533316"; // The password for your database user
$dbname = "abdulsah_test"; // The name of your live database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
