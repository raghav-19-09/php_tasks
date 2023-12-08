<?Php
session_start();
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "add_to_carts"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    // echo "connection successfully";
}
?>