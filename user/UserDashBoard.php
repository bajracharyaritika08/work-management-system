<?php require('../connection/config.php')?>
<?php
session_start();
if(isset($_SESSION['email'])){


?>



    // check if the use session is set or not
    // if set dashboad page is loaded otherwise redirect to login page

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

    <title>User Dashboard Panel</title>
</head>
<style>
    .flex-container {
  display: flex;
  flex-direction: row;
  font-size: 30px;
  text-align: center;
}
.flex-container {
  display: flex;
  flex-direction: row;
  font-size: 30px;
  text-align: center;
}

.flex-item-left {
  background-color: transparent;
  padding: 10px;
  flex: 33.33%;
  margin:20px;
  border-style:solid;
  border-color:grey;
  height:200px;
  border-radius:10px;
  color:grey;
}

.flex-item-right {
  background-color: transparent;
  padding: 10px;
  flex: 33.33%;
  margin:20px;
  border-style:solid;
  border-color:grey;
  height:200px;
  border-radius:10px;
  color:grey;
}
.flex-item-middle{
  background-color: transparent;
  padding: 10px;
  flex: 33.33%;
  margin:20px;
  border-style:solid;
  border-color:grey;
  height:200px;
  border-radius:10px;
  color:grey;

}
.feedback-btn{
    background-color:transparent;
    border-radius:5px;
    color:grey;
    padding: 12px;
  border: 3px solid #6e6e6e;
  cursor: pointer;
    
}
.feedback-btn:hover{
    background-color:#4a4a4a;
    color:white;
}
button a{
    text-decoration: none;
    color:grey;
}
</style>
<body>
    <?php include('../userinc/sidebar.php')?>
    <section class="dashboard" id="dasbboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Welcome to KAM- क्षॆत्र </span>
            </div>   
            <div style="color:grey;">
            <div class="flex-container">
                  <div class="flex-item-left">
                    <h5>Feedbacks</h5><hr style="color:black;"><br>
                    <p style="font-size:large;">Number of feedbacks:</p>
                    <button class="feedback-btn"><a href="Registration.php">Click to visit</a></button>
                  </div><br>
                  <div class="flex-item-middle">
                  <h5>Active Users</h5><hr style="color:black;"><br>
                    <p style="font-size:large;">Active Users:</p>
                    <button class="feedback-btn"><a href="Registration.php">Click to visit</a></button>
                  </div><br>
                  <div class="flex-item-right">
                  <h5>Upcomming Holidays</h5><hr style="color:black;"><br>
                    <p style="font-size:large;">Event:</p>
                    <p style="font-size:large;">Date:</p>
                    
                  </div>
                </div>  
            </div>      
            </div>    
                </section>
        </div> 
        <?php
        }
        ?>

        <?php
        if(!isset($_SESSION['email'])){
          header ('Location : UserDashboard.php');
        ?>

        <?php
        }
        ?>
    <script src="../assets/js/admin.js"></script>
    </body>

</html>