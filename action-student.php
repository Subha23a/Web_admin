<?php include 'db.php'; ?>
<?php
if (isset($_POST['submit'])) {
    // $id = $_POST['id'];
    //   $date = $_POST['date'];
    $name = $_POST['name'];
    //  exit;
    $regno = $_POST['regno'];
    $course = $_POST['course'];
    $stream = $_POST['stream'];
    $cgpa = $_POST['cgpa'];
    $passyear = $_POST['passyear'];
    $college = $_POST['college'];
    $location = $_POST['location'];
    $date = date('Y-m-d');
    $month = date('M');
    $year = date('Y');

    // echo "INSERT INTO student (`name`,`regno`,`course`, `stream`,`cgpa`,`passyear` ,`college`, `location`,`date`,`month`,`year`) VALUES ('$name','$regno','$course','$stream','$cgpa','$passyear','$college','$location','$date','$month','$year')"; exit;
    $submit = $conn->query("INSERT INTO student (`name`,`regno`,`course`, `stream`,`cgpa`,`passyear` ,`college`, `location`,`date`,`month`,`year`) VALUES ('$name','$regno','$course','$stream','$cgpa','$passyear','$college','$location','$date','$month','$year')");

    // $last_id = mysqli_insert_id($conn);

    if ($submit) {
        header("Location:student-view.php");
        # code...
    }
}


if (isset($_POST['update'])) {
    $id = $_POST['id'];
    // $date = $_POST['date'];
    $name = $_POST['name'];
    //  exit;
    $regno = $_POST['regno'];
    $course = $_POST['course'];
    $stream = $_POST['stream'];
    $cgpa = $_POST['cgpa'];
    $passyear = $_POST['passyear'];
    $college = $_POST['college'];
    $location = $_POST['location'];
     $date = date('Y-m-d');
    $month = date('M');
    $year = date('Y');


    // echo "UPDATE `student` SET `name`='$name',`regno`='$regno',`course`='$course',`stream`='$stream',`cgpa`='$cgpa',`passyear`='$passyear',`college`='$college',`location`='$location',`date`='$date',`month`='$month',``year`='$month' where id='$id'" exit;

    $update = $conn->query("UPDATE `student` SET `name`='$name',`regno`='$regno',`course`='$course',`stream`='$stream',`cgpa`='$cgpa',`passyear`='$passyear',`college`='$college',`location`='$location',`date`='$date',`month`='$month',`year`='$year' where id='$id'");

    $last_id = mysqli_insert_id($conn);
    if ($update) {
        header("Location:student-view.php");
        # code...
    }
}
// if (isset($_POST[""])) {

?>