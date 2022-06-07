<?php require('connection/config.php')?>



    // check if the use session is set or not
    // if set dashboad page is loaded otherwise redirect to login page

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>User Dashboard Panel</title>
</head>

<body>
    <?php include('userinc/sidebar.php')?>
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
                <div class="holiday">
                <?php
            $select_query ="SELECT * FROM holiday ";
            $select_result =mysqli_query($conn, $select_query);
            $data = mysqli_fetch_array($select_result);
            ?>
            <h3>Upcoming Holidays</h3><br><hr width="60px"><br>
                <h3>Event Name: <?php echo $data['event_name'];?> <br><br></h3>
                <h3>Date: <?php echo $data['holiday'];?></h3>
                <br>
                <h3>Event Name: <?php echo $data['event_name'];?> <br><br></h3>
                <h3>Date: <?php echo $data['holiday'];?></h3>
                </div>
            </div>      
            </div>    
                </section>
        </div> 
    <script src="assets/js/admin.js"></script>
    </body>

</html>