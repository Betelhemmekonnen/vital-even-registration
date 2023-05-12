<?php
session_start();
require '../dbconfig.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($db, $_POST['delete_student']);

    $query = "DELETE FROM user WHERE userId='$student_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        header("Location: ../dashbor.php");
        exit(0);
    }
    
}
?>