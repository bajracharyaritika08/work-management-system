<?php
require ('../connection/config.php');
if(isset($_GET['task_id']))
{
    $leave_id = $_GET['task_id'];
    $delete_query ="DELETE FROM leave_records WHERE leave_id=$leave_id";
    $delete_result = mysqli_query($conn,$delete_query);
    if($delete_result){
        echo header ('Location: ../user/Leave.php?msg=dsuccess');
    }
    else{
        echo header('Location: .../user/Leave.php?msg=derror');
    }
}

?>