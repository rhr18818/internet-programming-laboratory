<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submited Data</title>
    <style>
        body{
            min-height: 100vh;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        .registration_form{
            background: #4c4ae1;
            color: white;
            border-radius: 10px;
            height: auto;
            margin: 10px;
            padding: 20px;
            width: 100%;
            max-width: 400px;
        }
        .registration_form h2{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px;
        }
        

    </style>
</head>
<body>
    <div class="registration_form">
        <h2>Submited Data</h2>
        <?php
            // Include database connection
            require_once 'db_connection.php';

            // Get form data
            $name = $_POST["name"];
            $email = $_POST["mail"];
            $phone = $_POST["phone"];
            $gender = $_POST["gender"];
            $city = $_POST["location"];

            // First check if email already exists
            $check_sql = "SELECT * FROM students WHERE email = '$email' OR phone = '$phone'";
            $result = $conn->query($check_sql);

            if ($result->num_rows > 0) {
                // Email already exists!
                echo "<h2 style='color: #b22222; margin: 20px; display: flex; justify-content: center'>Registration Failed!</h2>";
                echo "<div style='border: 2px solid #b22222; padding: 20px; margin: 20px; width: 300px; border-radius: 10px'>";
                echo "This email and phone is already registered! Please use a different email and phone.";
                echo "<br><br><a style='color: white;display: flex;justify-content: center' href='index.html'>Go Back to Registration</a>";
                echo "</div>";
            } else {
                // Email doesn't exist, safe to insert
                $sql = "INSERT INTO students (name, email, phone, gender, city) 
                        VALUES ('$name', '$email', '$phone', '$gender', '$city')";

                // Try to save the data
                if ($conn->query($sql) === TRUE) {
                    echo "<h3 style='color: #4ae14c; margin: 20px ;display: flex; justify-content: center' >Registration Successful!</h3>";
                    echo "<b>Name:</b> " . $name . "<br><br>";
                    echo "<b>Email:</b> " . $email . "<br><br>";
                    echo "<b>Phone:</b> " . $phone . "<br><br>";
                    echo "<b>Gender:</b> " . $gender . "<br><br>";
                    echo "<b>City:</b> " . $city . "<br><br>";
                    
                } else {
                    echo "Oops! Something went wrong: " . $conn->error;
                }
            }

        // Close database connection
            $conn->close();
        ?>
    </div>
   
</body>
</html>