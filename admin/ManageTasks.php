<?php require('../connection/config.php')?>

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

    <title>Admin Dashboard Panel</title>
</head>

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
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Manage Tasks</span>
            </div>
            <div style="overflow-x:auto;">
<table style="width:100%; color:grey;border-collapse: collapse;" border="2px" >
        <thead>
            <tr>
                <th>S.N</th>
                <th>Task Title</th>
                <th>Task Priority</th>
                <th>Task Details</th>
                <th>Deadline</th>
                <th>Assigned To</th>
                <th>Task Status</th>
                <th>Action</th>
                <th>Remarks</th>
            </tr>
        </thead>
        <tfoot>
            
            <tr>
                <th>S.N</th>
                <th>Task Title</th>
                <th>Task Priority</th>
                <th>Task Details</th>
                <th>Deadline</th>
                <th>Assigned To</th>
                <th>Task Status</th>
                <th>Action</th>
                <th>Remarks</th>
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
                <td><?php echo $data['assigned_to'];?></td>
                
                <td><?php echo $data['status'];?> </td>
                <td>
                    <a href="EditTask.php?id=<?php echo $data ['task_id']; ?>"><button style="background-color:#bd7706;padding:10px 15px;border-radius:5px;color:white; cursor: pointer;">EDIT</button></a><br><br>
                    <a href="../process/deletetask.php?task_id=<?php echo $data ['task_id'];?>"><button style="background-color:#8f0909;padding:10px 18px;border-radius:8px;color:white; cursor: pointer;" onclick="myFunction()">Delete</button></a>
                </td>
                <td><?php echo $data['remarks'];?></td>
            </tr>
            <?php
            }
            ?>
            
        </tbody>
      
    
</table>
            
        </div>               
            </div>
                    
                    
                </section>
        </div>

        <script>
function myFunction() {
  alert("A task deleted successfully! Please press ok to continue.");
}
</script>
    <script src="../assets/js/admin.js"></script>
    </body>

</html>