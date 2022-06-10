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

    <title>Leave Dashboard</title>
</head>
<style>
input[type=text],input[type=date], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background-color:transparent;
  color:grey;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.newuser{
    background-color:transparent;
    border-radius:5px;
    color:grey;
    padding: 12px;
  border: 3px solid #6e6e6e;
  cursor: pointer;
    
}
.newuser:hover{
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
            <div class="search-box">
        </div>
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil  uil-postcard"></i>
                    <span class="text">Apply for Leave</span>
                </div>
            <div>
                <button class="newuser"><a href="LeaveForm.php">Apply for leave</a></button>
            </div><br>
            <span style="color:green;font-size:larger;">Leave Status</span>  
            <table style="width:100%; color:grey;border-collapse: collapse;" border="2px" >
        <thead>
            <tr>
                <th>S.N</th>
                <th>Leave Title</th>
                <th>Reasons for leave</th>
                <th>From</th>
                <th>To</th>
                
            </tr>
        </thead>
        <tfoot>
            
            <tr>
                <th>S.N</th>
                <th>Leave Title</th>
                <th>Reasons for leave</th>
                <th>From</th>
                <th>To</th>
                
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
                <td><?php echo $data['leave_title'];?></td>
                <td><?php echo $data['leave_details'];?></td>
                <td><?php echo $data['form'];?></td>
                <td><?php echo $data['upto'];?></td>
                
                
            </tr>
            <?php
            }
            ?>
            
        </tbody>
      
    
</table>      
      </div> 
    </section>
</div>
    <script src="../assets/js/admin.js"></script>
    </body>

</html>