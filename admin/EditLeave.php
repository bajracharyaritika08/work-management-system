<?php require('../connection/config.php')?>

<!-- To show the data into the khali fields when user visits edit page -->
<?php

if(isset($_GET['id'])){
    $leave_id = $_GET['id'];
    $show_query= "SELECT*FROM leave_records WHERE leave_id=$leave_id";
    $show_result = mysqli_query($conn,$show_query);
    $row = $show_result->fetch_assoc(); 
    //row vane euta asociative array ma we store. 
    $status = $row['status'];
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
    <?php include('../inc/sidebar.php')?>
    <section class="dashboard" id="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                <i class="uil uil-fast-mail"></i>                    
                <span class="text">Leave Status</span>
            </div>
               
<?php
//When a create a task form is submitted
if(isset($_POST['submit'])){
    
    
    $status = $_POST['status'];

    if( $status!=""){
    //Update query yeta lekheko 
    $edit_query ="UPDATE leave_records SET status='$status' WHERE leave_id=$leave_id";
    $edit_result= mysqli_query($conn,$edit_query);
    if($edit_result){
        echo "Leave request updated sucessfully";
    }
    else{
        echo "Couldn't perform the requested task.";
    }
}else{
    echo 'Please fill all the datas';
}
}
?>
<form action="#" method="POST" enctype="multipart/form-data" style="color:white;padding:20px; ">
    
    <label for="status">Status:</label>
    <select name="status" id="">
    <?php
            if($status=="Pending"){
                ?>
                    <option value="Pending"  selected><?php echo $status;?></option>
                    <option value="Approved">Approved</option>
                    <option value="Cancelled">Not apporved</option>
                    <?php
            }else if($status=="Approved"){
                ?>
                    <option value="Approved" selected><?php echo $status;?></option>
                    <option value="Pending">Pending</option>
                    <option value="Cancelled">Cancelled</option>
                <?php
            }else{
                ?>
                    <option value="<?php echo $status;?>" selected></option>
                    <option value="Approved">Approved</option>
                    <option value="Pending">Pending</option>
                    <?php
            }
        ?>
    </select ><br><br>
    <button type="submit" name="submit"  style="background-color:#197500;padding:10px 15px;border-radius:5px;color:white; cursor: pointer;">Submit</button>
</form>

            </div> 
                </section>
        </div>
    <script src="../assets/js/admin.js"></script>
    </body>

</html>