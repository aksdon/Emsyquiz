<?php
// Establish connection to MySQL database
$servername = "sql301.epizy.com";
$username = "epiz_33804480";
$password = "CkntGBbAwGL";
$dbname = "epiz_33804480_emsyquiz";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data and insert into database
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "<p>Thank you for your message!</p>";
    // Redirect to index.html after 3 seconds
    header("refresh:3; url=index.html");
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
