<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(32, 62, 71);
            margin: 0;
            padding: 0;
        }

        .student-form {
            background-color: #fff;
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .student-form h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .student-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .student-form input[type="text"],
        .student-form input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .submit-container {
            text-align: center;
        }

        .student-form input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .student-form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    
<form method="post" action="action-student.php" class="student-form">
    <h2>Student Form</h2>
    <!-- <label for="name">Date:</label>
    <input type="date" id="date" name="date" required><br><br> -->

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="name">Registation NO:</label>
    <input type="text" id="regno" name="regno" required><br><br>

    <label for="name">course:</label>
    <input type="text" id="course" name="course" required><br><br>
     
    <label for="name">Stream:</label>
    <input type="text" id="stream" name="stream" required><br><br>

    <label for="name">CGPA:</label>
    <input type="text" id="cgpa" name="cgpa" required><br><br>

    <label for="name">Passyear:</label>
    <input type="text" id="passyear" name="passyear" required><br><br>
    
    <label for="name">College:</label>
    <input type="text" id="college" name="college" required><br><br>
    
    <label for="name">Location:</label>
    <input type="text" id="location" name="location" required><br><br>
    
    <div class="submit-container">
    <input type="submit" name="submit" value="Submit">
     </div>

    <!-- <input type="submit" name="Edit" value="Edit"> -->

   
</form> 

</body>
</html>