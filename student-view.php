<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
    <link rel="stylesheet" href="style1.css">

</head>

<body>

    <!-- <h2>Student Records</h2> -->

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <h2>Student Records</h2>
            <tr>
                <th style="background-color:rgb(18, 126, 180);">Name</th>
                <th style="background-color:rgb(18, 126, 180);">Reg. No</th>
                <th style="background-color:rgb(18, 126, 180);">Course</th>
                <th style="background-color:rgb(18, 126, 180);">Stream</th>
                <th style="background-color:rgb(18, 126, 180);">CGPA</th>
                <th style="background-color:rgb(18, 126, 180);">Pass Year</th>
                <th style="background-color:rgb(18, 126, 180);">College</th>
                <th style="background-color:rgb(18, 126, 180);">Location</th>
                <th style="background-color:rgb(18, 126, 180);">Date</th>
                <th style="background-color:rgb(18, 126, 180);">Month</th>
                <th style="background-color:rgb(18, 126, 180);">Year</th>
                <th style="background-color:rgb(18, 126, 180);" colspan="2">Actions</th>
                <!-- <th style="background-color:rgb(18, 126, 180);">Report Page</th> -->


            </tr>
        </thead>
        <tbody>
            <?php
            $ins = $conn->query("SELECT * FROM `student` ORDER BY id DESC");
            while ($row = $ins->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['regno'] . "</td>";
                echo "<td>" . $row['course'] . "</td>";
                echo "<td>" . $row['stream'] . "</td>";
                echo "<td>" . $row['cgpa'] . "</td>";
                echo "<td>" . $row['passyear'] . "</td>";
                echo "<td>" . $row['college'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo " <td>" . $row['month'] . "</td>";
                echo " <td>" . $row['year'] . "</td>";
                echo "<td><a class='edit-btn' href='student-edit.php?id=" . $row['id'] . "'>Edit</a></td>";
                echo "<td><a class='edit-btn' href='student.php'?id=" . $row['id'] . "'  >Add</a></td>";
                // echo "<td><a class='edit-btn' href='student-report.php'>Report Page</a></td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>