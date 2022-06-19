<?php
require ('../connection/config.php');
if(isset($_GET['task_id']))
{
    $task_id = $_GET['task_id'];
    $delete_query ="DELETE  FROM tasks WHERE task_id=$task_id";
    $delete_result = mysqli_query($conn,$delete_query);
    if($delete_result){
        echo header ('Location: ../admin/managetasks.php?msg=dsuccess');
    }
    else{
        echo header('Location: ../admin/managetasks.php?msg=derror');
    }
}

?>