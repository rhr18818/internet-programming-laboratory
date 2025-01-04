<?php
// Include database connection
require_once 'db_connection.php';

// Get form data
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$gender = $_POST["gender"];
$city = $_POST["city"];

// First check if email already exists
$check_sql = "SELECT * FROM students WHERE email = '$email' OR phone = '$phone'";
$result = $conn->query($check_sql);

if ($result->num_rows > 0) {
    // Email already exists!
    echo "<h2 style='color: red; margin: 20px'>Registration Failed!</h2>";
    echo "<div style='border: 2px solid red; padding: 20px; margin: 20px; width: 300px;'>";
    echo "This email and phone is already registered! Please use a different email and phone.";
    echo "<br><br><a href='index.html'>Go Back to Registration</a>";
    echo "</div>";
} else {
    // Email doesn't exist, safe to insert
    $sql = "INSERT INTO students (name, email, phone, gender, city) 
            VALUES ('$name', '$email', '$phone', '$gender', '$city')";

    // Try to save the data
    if ($conn->query($sql) === TRUE) {
        echo "<h2 style='color: green; margin: 20px'>Registration Successful!</h2>";
        echo "<div style='border: 2px solid green; border-radius: 10px; padding: 20px; margin: 20px; width: 300px;'>";
        echo "<b>Name:</b> " . $name . "<br><br>";
        echo "<b>Email:</b> " . $email . "<br><br>";
        echo "<b>Phone:</b> " . $phone . "<br><br>";
        echo "<b>Gender:</b> " . $gender . "<br><br>";
        echo "<b>City:</b> " . $city . "<br><br>";
        echo "</div>";
    } else {
        echo "Oops! Something went wrong: " . $conn->error;
    }
}

// Close database connection
$conn->close();
?>