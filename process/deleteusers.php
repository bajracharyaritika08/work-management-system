<?php
require ('../connection/config.php');
if(isset($_GET['reg_id']))
{
    $reg_id = $_GET['reg_id'];
    $delete_query ="DELETE FROM registration WHERE reg_id=$reg_id";
    $delete_result = mysqli_query($conn,$delete_query);
    if($delete_result){
        echo header ('Location: ../manageusers.php?msg=dsuccess');
    }
    else{
        echo header('Location: ../manageusers.php?msg=derror');
    }
}

?>