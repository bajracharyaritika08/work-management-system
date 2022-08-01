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
    <title>Leave Records</title>
</head>
<style>

</style>
<body>
    <?php include('../inc/sidebar.php')?>
    <section class="dashboard" id="dasbboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            
             
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                <i class="uil uil-fast-mail"></i>
                    <span class="text">LEAVE REQUESTS</span>
            </div>   
            <div style="overflow-x:auto;">
<table style="width:100%; color:grey;border-collapse: collapse;" border="2px" >
        <thead>
            <tr>
                <th>S.N</th>
                <th>Leave Title</th>
                <th>Leave Details</th>
                <th>From</th>
                <th>To</th>
                <th>Leave Status</th>
                <th>Update</th>
            </tr>
        </thead>
        <tfoot>
            
            <tr>
                <th>S.N</th>
                <th>Leave Title</th>
                <th>Leave Details</th>
                <th>From</th>
                <th>To</th>
                <th>Leave Status</th>
                <th>Update</th>

            </tr>
        </tfoot>
        <tbody>
        <?php
            $select_query ="SELECT * FROM leave_records ORDER BY leave_id DESC";
            $select_result =mysqli_query($conn, $select_query);
            $count = 0;
            while($data = mysqli_fetch_array($select_result))
            {
                $count += 1;
        ?>
            <tr>
                <td><?php echo  $count ?></td>
                <td><?php echo $data['leave_title'];?></td>
                <td><?php echo $data['leave_details'];?></td>
                <td><?php echo $data['date_from'];?></td>
                <td><?php echo $data['date_to'];?></td>
                <td><?php echo $data['status'];?></td>
                <td>
                    <a href="EditLeave.php?id=<?php echo $data ['leave_id']; ?>"><button style="background-color:#bd7706;padding:10px 15px;border-radius:5px;color:white; cursor: pointer;">EDIT</button></a><br><br>
                </td>
            </tr>
            <?php
            }
            ?>
            
        </tbody>
      
    
</table>
            
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