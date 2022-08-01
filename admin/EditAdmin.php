<?php require('../connection/config.php')?>

<!-- To show the data into the khali fields when user visits edit page -->
<?php
if(isset($_GET['id'])){
    $admin_id = $_GET['id'];
    $show_query= "SELECT * FROM admins WHERE admin_id=$admin_id";
    $show_result = mysqli_query($conn,$show_query);
    $row = $show_result->fetch_assoc(); 
    //row vane euta asociative array ma we store.
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $teamleader = $_POST['teamleader'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $passwords = $_POST['passwords'];
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
    <link rel="icon" type="image/x-icon" href="../assets/images/logokam.png">

    <title>Edit admin details</title>
</head>
<style>
    label{
        color:grey;
    }
</style>
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
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Edit User Details from here.</span>
            </div>
               
<?php
//When a create a task form is submitted
if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $teamleader = $_POST['teamleader'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $passwords = $_POST['passwords'];
    if($fullname!="" && $gender!="" && $teamleader!=""  && $email!=""  && $username!=""  && $passwords!="" ){
        //Update query yeta lekheko 
    $edit_query ="UPDATE registration SET fullname='$fullname' gender='$gender',email='$email',username='$username',passwords='$passwords' WHERE admin_id=$admin_id ";
    $edit_result= mysqli_query($conn,$edit_query);
    if($edit_result){
        echo "Task Updated successufuly";
    }
    else{
        echo "Couldn't perform the requested task.";
    }
}else{
    echo 'Please fill all the datas';
}
}
?>
<form action="AdminRegister.php" method="POST" enctype="multipart/form-data"  style="color:grey;">
<div class="row">
    <div class="col-25">
        <label for="fullname">Full Name:</label>
        </div>
        <div class="col-75">
        <input type="text" name="fullname" required placeholder="Please enter the full name.">
    </div>
</div><br>
<div class="row">
    <div class="col-25">
        <label for="gender">Gender</label>
        </div>
        <div class="col-75">
        <select name="gender" id="">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
        </select >
    </div>
</div><br>
<div class="row">
    <div class="col-25">
        <label for="teamleader">Team:</label>
        </div>
        <div class="col-75">
        <select name="teamleader" id="">
        <option value="Graphic Designing">Graphic Designing</option>
            <option value="React Developers">React Developers </option>
            <option value="MERN STACK">MERN STACK</option>
            <option value="ANGULAR JS/ Vue JS">ANGULAR JS/ Vue JS</option>
            <option value="Django Team">Django Team</option>
            <option value="Digital Marketing">Digital Marketing</option>
            <option value="Team Youtube">Team Youtube</option>
            <option value="Account Department">Account Department</option>
            <option value="Front Desk Team">Front Desk Team</option>
            <option value="Call Center Team">Call Center Team</option>
            <option value="React Native / Flutter ">React Native / Flutter </option>
        </select >
    </div>
</div><br>
<div class="row">
    <div class="col-25">
        <label for="email">Email:</label>
        </div>
        <div class="col-75">
        <input type="email" name="email" required placeholder="Please enter your current email address.">
    </div>
</div><br>
<div class="row">
    <div class="col-25">
        <label for="username">Username:</label>
        </div>
        <div class="col-75">
        <input type="text" name="username" required placeholder="For eg: kamchettra123">
    </div>
</div><br>
<div class="row">
    <div class="col-25">
        <label for="password">Password:</label>
        </div>
        <div class="col-75">
        <input type="password" name="passwords" required placeholder="For eg: Kamcheetra@123"><br><br>
    </div>
</div>
<button type="submit" name="submit" class="submit-btn" style="background-color:#004f00;padding:10px 15px;border-radius:5px;color:white; cursor: pointer;">Submit</button>
</div>    

</div> 
                </section>
        </div>
    <script src="../assets/js/admin.js"></script>
    </body>

</html>