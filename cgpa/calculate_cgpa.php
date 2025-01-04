<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGPA Result</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f0f0f0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .result {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin: 20px 0;
            color: #333;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        .course-detail {
            margin: 10px 0;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #0B192C;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #021526;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Your CGPA Result</h1>
        
        <?php
        if(isset($_POST['grades']) && isset($_POST['credits'])) {
            $grades = $_POST['grades'];
            $credits = $_POST['credits'];
            
            $totalPoints = 0;
            $totalCredits = 0;
            
            // Calculate total grade points and credits
            for($i = 0; $i < count($grades); $i++) {
                if($credits[$i] > 0) {  // Only calculate if credit is provided
                    $totalPoints += $grades[$i] * $credits[$i];
                    $totalCredits += $credits[$i];
                    
                    // Show individual course details
                    echo "<div class='course-detail'>";
                    echo "Course " . ($i + 1) . ": ";
                    echo "Grade Point: " . $grades[$i] . " × ";
                    echo "Credit: " . $credits[$i];
                    echo "</div>";
                }
            }
            
            // Calculate CGPA
            if($totalCredits > 0) {
                $cgpa = $totalPoints / $totalCredits;
                echo "<div class='result'>";
                echo "CGPA: " . number_format($cgpa, 2);
                echo "</div>";
                
                echo "<div class='course-detail'>";
                echo "Total Credits: " . $totalCredits . "<br>";
                echo "Total Grade Points: " . number_format($totalPoints, 2);
                echo "</div>";
            } else {
                echo "<div class='result'>No valid courses entered!</div>";
            }
        } else {
            echo "<div class='result'>No data submitted!</div>";
        }
        ?>
        
        <a href="index.html" class="btn">Calculate Another CGPA</a>
    </div>
</body>
</html>