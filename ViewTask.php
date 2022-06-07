<?php require('connection/config.php')?>

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

    <title>View Task</title>
</head>

<body>
    <?php include('userinc/sidebar.php')?>
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
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Tasks</span>
            </div>

<table style="width:100%; color:grey;" border="2px" >
        <thead>
            <tr>
                <th>S.N</th>
                <th>Task Title</th>
                <th>Task Priority</th>
                <th>Task Details</th>
                <th>Deadline</th>
                <th>Task Status</th>
            </tr>
        </thead>
        <tfoot>
            
            <tr>
                <th>S.N</th>
                <th>Task Title</th>
                <th>Task Priority</th>
                <th>Task Details</th>
                <th>Deadline</th>
                <th>Task Status</th>
            </tr>
        </tfoot>
        <tbody>
        <?php
            $select_query ="SELECT * FROM tasks ORDER BY created_at DESC";
            $select_result =mysqli_query($conn, $select_query);
            $count = 0;
            while($data = mysqli_fetch_array($select_result))
            {
                $count += 1;
        ?>
            <tr>
                <td><?php echo  $count ?></td>
                <td><?php echo $data['title'];?></td>
                <td><?php echo $data['priority'];?></td>
                <td><?php echo $data['details'];?></td>
                <td><?php echo $data['deadline'];?></td>
                
                <td><button type="button" name> <?php echo $data['status'];?>  </button></td>
            </tr>
            <?php
            }
            ?>
            
        </tbody>
      
    
</table>
            
                            
            </div>
                    
                    
                </section>
        </div>

       
    <script src="assets/js/admin.js"></script>
    </body>

</html>