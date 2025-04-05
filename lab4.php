<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #6a11cb, #2575fc);
            color: black;
            text-align: center;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            margin: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        input {
            width: 90%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background: black;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>GRADE CALCULATOR</h2>
        <form action="" method="post">
            <label>Full Name:</label><br>
            <input type="text" name="name" required><br>
            <label>Program:</label><br>
            <input type="text" name="program" required><br>
            <label>Section:</label><br>
            <input type="text" name="section" required><br>
            <label>Assignment:</label><br>
            <input type="number" name="assignment" required><br>
            <label>Quizzes:</label><br>
            <input type="number" name="quizzes" required><br>
            <label>Project:</label><br>
            <input type="number" name="project" required><br>
            <label>Examination:</label><br>
            <input type="number" name="exam" required><br><br>
            <button type="submit" name="calculate">Calculate</button>
        </form>
    </div>

    <?php
    if (isset($_POST['calculate'])) {
        $name = $_POST['name'];
        $program = $_POST['program'];
        $section = $_POST['section'];
        $assignment = $_POST['assignment'];
        $quizzes = $_POST['quizzes'];
        $project = $_POST['project'];
        $exam = $_POST['exam'];

        // Calculate average
        $average = ($assignment + $quizzes + $project + $exam) / 4;
        
        echo "<div class='result'>";
        echo "<h3>Result</h3>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Program:</strong> $program</p>";
        echo "<p><strong>Section:</strong> $section</p>";
        echo "<p><strong>Average:</strong> $average</p>";
        echo "</div>";
    }
    ?>
</body>
</html>
