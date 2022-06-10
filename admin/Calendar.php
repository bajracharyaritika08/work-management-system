<!-- <?php require('connection/config.php')?>


<?php
//When a create a task form is submitted
if(isset($_POST['submit'])){
    $event_name = $_POST['eventname'];
    $holiday = $_POST['holiday'];
    if($event_name!="" && $holiday!="" ){
    //Insert into query pani ho 
    $create_query="INSERT INTO holiday(event_name, holiday) VALUES ('$event_name','$holiday')";
    //result vane variable ma execute garounay
    $create_result= mysqli_query($conn,$create_query);
    if($create_result){
        echo header('Location: dashboard.php?msg=csuccess');
    }
    else{
        echo "Couldn't perform the requested task.";
    }
}else{
    echo 'Please fill all the datas';
}
}
?> -->

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
 <title>Calendar</title>
</head>
<body>
<?php include('inc/sidebar.php')?>
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
                    <i class="uil  uil-trees"></i>
                    <span class="text">Holiday Updates</span>
            </div>
            <div class="container">
                <form action="#" method="POST" enctype="multipart/form-data"  style="color:grey;">
                <div class="row">
                    <div class="col-25">
                        <label for="eventname">Event Name:</label>
                        </div>
                        <div class="col-75">
                        <input type="text" name="eventname" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="holiday">Holiday:</label>
                        </div>
                        <div class="col-75">
                        <input type="date" name="holiday" required>
                    </div>
                    <button type="submit" name="submit" class="submit-btn" style="background-color:#029609;padding:10px 15px;border-radius:5px;color:white; cursor: pointer;">Submit</button>
                  
                </div>
                
</form>
<script src="../assets/js/admin.js"></script>
</body>
</html>