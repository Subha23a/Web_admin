<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
    <?php $id = $_GET['id'];
    $ins = $conn->query("UPDATE * FROM `student` where id='$id'");
    $row = $ins->fetch_assoc();


    ?>
    <form action="action-student.php">
        
   
   
       








    </form>
</body>

</html>