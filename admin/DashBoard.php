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
    <link rel="stylesheet" href="../assets/css/DashBoard.css">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="icon" type="image/x-icon" href="../assets/images/logokam.png">

    <title>Admin Dashboard Panel</title>
</head>
<style>

</style>
<body>
    <?php include('../inc/sidebar.php')?>
    <section class="dashboard" id="dasbboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <p>
            <span style="color:grey;font-size:larger;">Logged in: <?php echo @$_SESSION['email'];?></span><br> <br>
            
            </p>
            
             
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Welcome to KAM- क्षॆत्र . </span>
            </div>   
            <div style="color:grey;">
                <div class="holiday">
                
                </div>
                <h3>What's New?</h3>
                 </div>      
            </div>  
            <div class="flex-container">

                  <div class="flex-item-left">
                    <h5>Active Admins</h5><hr style="color:black;"><br>
                    <p style="font-size:large;">Active Admins</p>
                    <?php
                      $query="SELECT admin_id from admins order by admin_id";
                      $query_run =mysqli_query($conn, $query);
                      $row = mysqli_num_rows($query_run);
                      echo "<p> $row</p>";
                  ?>
                  </div><br>
                  <div class="flex-item-middle">
                  <h5>Active Users</h5><hr style="color:black;"><br>
                    <p style="font-size:large;">Active Users:
                  <?php
                      $query="SELECT reg_id from registration order by reg_id";
                      $query_run =mysqli_query($conn, $query);
                      $row = mysqli_num_rows($query_run);
                      echo "<p> $row</p>";
                  ?>
                  
                  </p>
                  </div><br>
                  
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