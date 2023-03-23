<?php
// Establishing database connection
$servername = "sql308.ezyro.com";
$username = "ezyro_33779039";
$password = "Abhijeet@123";
$dbname = "ezyro_33779039_emsyQuiz";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Inserting form data into database
if(isset($_POST['name']) && isset($_POST['dob']) && isset($_POST['gender']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['class_trade']) && isset($_POST['school_college']) && isset($_POST['place']) && isset($_POST['medium']) && isset($_POST['policy'])) {

    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $class_trade = $_POST['class_trade'];
    $school_college = $_POST['school_college'];
    $place = $_POST['place'];
    $medium = $_POST['medium'];
    $policy = $_POST['policy'];

    $sql = "INSERT INTO quiz_registration (name, dob, gender, phone, email, class_trade, school_college, place, medium, policy) VALUES ('$name', '$dob', '$gender', '$phone', '$email', '$class_trade', '$school_college', '$place', '$medium', '$policy')";

    if ($conn->query($sql) === TRUE) {
       // Redirecting to payment page
       header("Location: https://rzp.io/l/qRPRw0gc");
       echo "Redirecting to payments page...";
       exit();
    } 
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Closing database connection
$conn->close();
?>
