<?php require('../connection/config.php')?>

<!-- To show the data into the khali fields when user visits edit page -->
<?php
if(isset($_GET['id'])){
    $reg_id = $_GET['id'];
    $show_query= "SELECT * FROM registration WHERE reg_id=$reg_id";
    $show_result = mysqli_query($conn,$show_query);
    $row = $show_result->fetch_assoc(); 
    //row vane euta asociative array ma we store.
    $fullname = $row['fullname'];
    $age = $row['age'];
    $address = $row['address'];
    $gender = $row['gender'];
    $email = $row['email'];
    $joined_date = $row['joined_date'];
    $username = $row['username'];
    $password = $row['password'];
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

    <title>Edit User</title>
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
    $age = $_POST['age'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $joined_date = $_POST['joined_date'];
    $username = $_POST['username'];
    $password = $_POST['password'];
  

    if($fullname!="" && $age!="" && $address!="" && $gender!="" && $email!=""  && $joined_date!=""  && $username!=""  && $password!=""){
    //Update query yeta lekheko 
    $edit_query ="UPDATE registration SET fullname='$fullname', age='$age', address='$address', gender='$gender',email='$email',joined_date='$joined_date',username='$username',password='$password' WHERE reg_id=$reg_id ";
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
<form action="#" method="POST" enctype="multipart/form-data" style="color:white;padding:20px; ">
                <div class="row">
                    <div class="col-25">
                        <label for="fullname">Full Name:</label>
                        </div>
                        <div class="col-75">
                        <input type="text" name="fullname" required value="<?php echo $fullname?>">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-25">
                        <label for="age">Age: </label>
                        </div>
                        <div class="col-75">
                        <input type="text" name="age" value="<?php echo $age?>" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-25">
                        <label for="address">Address:</label>
                        </div>
                        <div class="col-75">
                        <input type="text" name="address" required value="<?php echo $address?>">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-25">
                        <label for="gender">Gender</label>
                        </div>
                        <div class="col-75">
                        <select name="gender" id="">
                        <?php
            if($gender=="Male"){
                ?>
                    <option value="Male" selected><?php echo $gender;?></option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                    <?php
            }else if($gender=="Female"){
                ?>
                    <option value="Female" selected><?php echo $gender;?></option>
                    <option value="Male">Male</option>
                    <option value="Others">Others</option>
                    <?php
            }else{
                ?>
                    <option value="<?php echo $gender;?>" selected></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <?php
            }
        ?>
                        </select >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-25">
                        <label for="email">Email:</label>
                        </div>
                        <div class="col-75">
                        <input type="email" name="email" required value="<?php echo $email?>">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-25">
                        <label for="joined_date">Joined Date (AD): </label>
                        </div>
                        <div class="col-75">
                        <input type="date" name="joined_date" value="<?php echo $joined_date?>" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-25">
                        <label for="username">Username:</label>
                        </div>
                        <div class="col-75">
                        <input type="text" name="username" required value="<?php echo $username?>">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-25">
                        <label for="password">Password:</label>
                        </div>
                        <div class="col-75">
                        <input type="text" name="password" required value="<?php echo $password?>"><br><br>
                    </div>
                </div>
                <button type="submit" name="submit" class="submit-btn" style="background-color:#004f00;padding:10px 15px;border-radius:5px;color:white; cursor: pointer;">Submit</button>
            </div>
            
                </section>
        </div>
    <script src="../assets/js/admin.js"></script>
    </body>

</html>