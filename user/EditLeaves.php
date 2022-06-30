<?php require('../connection/config.php')?>

<!-- To show the data into the khali fields when user visits edit page -->
<?php

if(isset($_GET['id'])){
    $leave_id = $_GET['id'];
    $show_query= "SELECT * FROM leave_records WHERE leave_id=$leave_id";
    $show_result = mysqli_query($conn,$show_query);
    $row = $show_result->fetch_assoc(); 
    //row vane euta asociative array ma we store.
  
    $leave_title = $row['leave_title'];
    $leave_details = $row['leave_details'];
    $date_from = $row['date_from'];
    $date_to = $row['date_to'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title>
</head>

<body>
    <?php include('../userinc/sidebar.php')?>
    <section class="dashboard" id="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
           
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Edit Task</span>
            </div>
               
<?php
//When a create a task form is submitted
if(isset($_POST['submit'])){
    
    $leave_title = $_POST['leave_title'];
    $leave_details = $_POST['leave_details'];
    $date_from = $_POST['date_from'];
    $date_to = $_POST['date_to'];

    if($leave_title!="" && $leave_details!="" && $date_from!=""  && $date_to!=""){
    //Update query yeta lekheko 
    $edit_query ="UPDATE leave_records SET leave_title='$leave_title', leave_details='$leave_details' , date_from='$date_from' , date_to='$date_to' WHERE leave_id=$leave_id";
    $edit_result= mysqli_query($conn,$edit_query);
    if($edit_result){
        echo "Leave Updated successufuly";
    }
    else{
        echo "Couldn't perform the requested task.";
    }
}else{
    echo 'Please fill all the datas';
}
}
?>
<form action="#" method="POST" enctype="multipart/form-data" style="color:grey;padding:20px; ">
    
</form>

            </div> 
                </section>
        </div>
    <script src="../assets/js/admin.js"></script>
    </body>

</html>