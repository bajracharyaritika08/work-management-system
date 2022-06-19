<?php require('../connection/config.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<style>


input[type=email],input[type=date], input[type=text],input[type=password],select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background-color:transparent;
  color:grey;
}
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.newuser {
    
    border-radius: 5px;
    padding: 12px;
    color:white;
    cursor: pointer;
    background-color:#bd7706;
}

.newuser:hover {
    background-color: #f49511;
    color: white;
}

button a {
    text-decoration: none;
    color: white;
}

</style>
<body>
<?php include('../inc/sidebar.php')?>
<section class="dashboard" id="dasbboard">
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
                    <i class="uil  uil-user-plus"></i>
                    <span class="text">Manage Users</span>
            </div>
            <?php
//When a create a task form is submitted
if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $teamleader = $_POST['teamleader'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($fullname!="" && $gender!="" && $teamleader!=""  && $email!=""  && $username!=""  && $password!="" ){
    //Insert into query pani ho 
    $create_query="INSERT INTO `admins`( `fullname`, `address`, `gender`,  `groupmember`, `email`, `joined_date`, `username`, `password`) VALUES('$fullname', '$age', '$address', '$gender', '$groupmember','$email','$joined_date', '$username', '$password')";
    //result vane variable ma execute garounay
    $create_result= mysqli_query($conn,$create_query);
    if($create_result){
        echo '<span style="color:#005700;text-align:center;">Congratulation! A new user added successfully.</span>';
        ?>
        <button class="newuser"><a href="ManageUser.php">View User.</a></button>
        <?php
    }
    else{
        echo "Couldn't perform the requested task.";
    }
}else{
    echo 'Please fill all the datas';
}
}
?> 
                <button class="newuser"><a href="ManageUser.php">Back</a></button>

            <div style="color:grey;">
                <h2>Fill here for the new registration!</h2>
            </div> 
            <div>
            <div class="container">
                <form action="Registration.php" method="POST" enctype="multipart/form-data"  style="color:grey;">
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
                        <label for="teamleader">Team Leader:</label>
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
                        <input type="password" name="password" required placeholder="For eg: Kamcheetra@123"><br><br>
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