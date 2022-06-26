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
                    <span class="text">User Profile</span>
            </div>
            <span style="color:grey;font-size:larger;">Logged in: <?php echo @$_SESSION['email'];?></span><br> <br>
            
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