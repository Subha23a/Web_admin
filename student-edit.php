<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <?php
    $id = $_GET['id'];
    $ins = $conn->query("SELECT * FROM `student` WHERE id='$id'");
    $row = $ins->fetch_assoc();
    ?>

    <!-- <h2 class="form-title">Update Student Details</h2> -->

    <form action="action-student.php" method="post" class="edit-form">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <h2 class="form-title">Update Student Details</h2>

        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>">
        </div>

        <div class="form-group">
            <label>Registration No:</label>
            <input type="text" name="regno" value="<?php echo $row['regno']; ?>">
        </div>

        <div class="form-group">
            <label>Course:</label>
            <input type="text" name="course" value="<?php echo $row['course']; ?>">
        </div>

        <div class="form-group">
            <label>Stream:</label>
            <input type="text" name="stream" value="<?php echo $row['stream']; ?>">
        </div>

        <div class="form-group">
            <label>CGPA:</label>
            <input type="text" name="cgpa" value="<?php echo $row['cgpa']; ?>">
        </div>

        <div class="form-group">
            <label>Pass Year:</label>
            <input type="text" name="passyear" value="<?php echo $row['passyear']; ?>">
        </div>

        <div class="form-group">
            <label>College:</label>
            <input type="text" name="college" value="<?php echo $row['college']; ?>">
        </div>

        <div class="form-group">
            <label>Location:</label>
            <input type="text" name="location" value="<?php echo $row['location']; ?>">
        </div>

        <input type="submit" name="update" value="Update" class="submit-btn">
    </form>
</body>

</html>
