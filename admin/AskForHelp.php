<?php require('../connection/config.php')?>
<?php
session_start();
if(isset($_SESSION['email'])){
?>
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
<body>
<?php include('../inc/sidebar.php')?>
<section class="dashboard" id="dasbboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil  uil-user-plus"></i>
                    <span class="text">Ask For Help</span>
            </div>
              <div class="ask-container" style="color:grey;text-align: justify;">
                
                <p>Since, you have sucessfully logged in to the system, here is the user manual is you have any problem while using this application or even if you are new to this. </p><br>
                <p>In the side navbar you can find many options such as:</p><br>
                <div class="nav-section">
                <i class="uil uil-estate"></i>
                <span class="link-name">Dashboard : This calls the dashboard page where you can find the number of active users.</span>
                </div><br>
                <div class="nav-section1">
                <i class="uil uil-graph-bar"></i>
                        <span class="link-name">Assign Task: In this section you can create any kind of Tasks/Job for your employee.</span>
                </div><br>
                <div class="nav-section2">
                <i class="uil uil-chart"></i>
                        <span class="link-name">Manage task: This section will help you to manage the tasks accordingly.</span>
                </div><br>
                <div class="nav-section3">
                <i class="uil uil-comments"></i>
                        <span class="link-name">Manage User: From this section we can simply create and manage the user. You have the authority to create a new user.</span>
                </div><br>
                <div class="nav-section4">
                <i class="uil  uil-shield-exclamation"></i>
                        <span class="link-name">Manage Admin: If you are in off duty you can create a new admin and make him/ her to look after your work.</span>
                </div><br><br>
                <p>Incase if you are facing problem with our system you can directly email us on info@kamchettra.com or else you can call our helpline: +1892463233</p>
              </div><br><br>
            
            </div>    
                </section>
        </div> 
        <?php
        }
        ?>

        <?php
        if(!isset($_SESSION['email'])){
          header ('Location : ../Index.php');
        ?>

        <?php
        }
        ?>
<script src="../assets/js/admin.js"></script>
</body>
</html>