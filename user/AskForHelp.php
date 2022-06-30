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
<?php include('../userinc/sidebar.php')?>
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
                <i class="uil uil-book-open"></i>
                        <span class="link-name">View Task: In this section you view the number of task assigned according to the departments. Please do not make changes in other's work.</span>
                </div><br>
                <div class="nav-section2">
                <i class="uil uil-fast-mail"></i>
                        <span class="link-name">Leave: You can apply for leave and view the leave status.</span>
                </div><br>
                
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