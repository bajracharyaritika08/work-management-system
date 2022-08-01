<?php
require ('../connection/config.php');
if(isset($_GET['reg_id']))
{
    $admin_id = $_GET['reg_id'];

    $delete_query ="DELETE FROM admins WHERE admin_id=$admin_id";
    $delete_result = mysqli_query($conn,$delete_query);
    if($delete_result){
       
        echo header ('Location: ../ManageAdmin.php?msg=dsuccess');
    }
    else{
        echo header('Location: ../ManageAdmin.php?msg=derror');
    }
}

?>