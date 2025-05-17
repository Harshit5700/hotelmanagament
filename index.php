
<?php
$host = "localhost";
$username = "root"; // XAMPP में default होता है 'root'
$password = "";     // Default XAMPP में कोई password नहीं होता
$database = "mydb";

// MySQL से कनेक्शन बनाएं
$conn = new mysqli($host, $username, $password, $database);

// कनेक्शन चेक करें
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
<?php
echo "Hello, world! Your PHP server is running.";
?>
