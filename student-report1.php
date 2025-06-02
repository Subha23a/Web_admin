<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <form method="POST" action="student-report.php" style="text-align:center;">
    <label>From: </label>
    <input type="date" name="from" required>
    <label>To: </label>
    <input type="date" name="to" required>
    <button type="submit" name="submit">Filter</button>
</form>

<?php
$filter = "";
if (isset($_POST['from']) && isset($_POST['to'])) {
    $from = $_POST['from'];
    $to = $_POST['to'];
    $filter = "WHERE date BETWEEN '$from' AND '$to'";
}
// echo  "INSERT INTO `student`(`date`,`month`,`year`) VALUES ('$date','$month','$year')"  ;
// exit;
// $query = "SELECT * FROM student $filter ORDER BY id DESC";
$result = $conn->query("SELECT * FROM student $filter ORDER BY id DESC");
?>

<table>
    <!-- table headers -->
    <?php
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <!-- other columns -->
                <td>{$row['date']}</td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='12'>No records found</td></tr>";
    }
    ?>
</table>

    
</body>
</html>