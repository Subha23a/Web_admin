<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 20px;
        }

        .report-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            max-width: 1000px;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .filter-form {
            margin-bottom: 20px;
            text-align: center;
        }

        .filter-form input[type="date"] {
            padding: 8px;
            margin: 0 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .filter-form button {
            padding: 8px 15px;
            border: none;
            background-color: #007BFF;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .filter-form button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px 10px;
            text-align: center;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .print-btn {
            display: block;
            text-align: right;
            margin-bottom: 15px;
        }

        .print-btn button {
            background: #28a745;
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .print-btn button:hover {
            background: #218838;
        }
    </style>
</head>
<body>

<div class="report-container">

    <div class="print-btn">
        <button onclick="window.print()">🖨️ Print Report</button>
    </div>

    <h2>Student Report</h2>

    <!-- 🔍 Filter Form -->
    <form class="filter-form" method="post">
        <label>From:</label>
        <input type="date" name="from" required>
        <label>To:</label>
        <input type="date" name="to" required>
        <button type="submit">Filter</button>
    </form>

    <!-- 📊 Student Table -->
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Reg. No</th>
            <th>Course</th>
            <th>Stream</th>
            <th>CGPA</th>
            <th>Pass Year</th>
            <th>College</th>
            <th>Location</th>
            <th>Date</th>
            <th>Month</th>
            <th>Year</th>
        </tr>

        <?php
        $filter = "";
        if (isset($_POST['from']) && isset($_POST['to'])) {
            $from = $_POST['from'];
            $to = $_POST['to'];
            $filter = "WHERE date BETWEEN '$from' AND '$to'";
        }

        $result = $conn->query("SELECT * FROM student $filter ORDER BY id DESC");

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['regno']}</td>
                    <td>{$row['course']}</td>
                    <td>{$row['stream']}</td>
                    <td>{$row['cgpa']}</td>
                    <td>{$row['passyear']}</td>
                    <td>{$row['college']}</td>
                    <td>{$row['location']}</td>
                    <td>{$row['date']}</td>
                    <td>{$row['month']}</td>
                    <td>{$row['year']}</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='12'>No records found</td></tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
