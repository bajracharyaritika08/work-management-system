<?php require('connection/config.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<style>


input[type=email],input[type=date], input[type=text],input[type=password],select, textarea {
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
<?php include('inc/sidebar.php')?>
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
                    <i class="uil  uil-user-plus"></i>
                    <span class="text">Manage Users</span>
            </div>
            <div>
                <button class="newuser"><a href="Registration.php">Add a new user.</a></button>
            </div>   
            <span>Active User</span>
            <table style="width:100%; color:grey;" border="2px" >
        <thead>
            <tr>
                <th>S.N</th>
                <th>Full Name</th>
                <th>Age</th>
                <th>Permanent</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Joined Date</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </thead>
        <tfoot>
            
            <tr>
            <th>S.N</th>
                <th>Full Name</th>
                <th>Age</th>
                <th>Permanent</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Joined Date</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </tfoot>
        <tbody>
        <?php
            $select_query ="SELECT * FROM registration ORDER BY created_at DESC";
            $select_result =mysqli_query($conn, $select_query);
            $count = 0;
            while($data = mysqli_fetch_array($select_result))
            {
                $count += 1;
        ?>
            <tr>
                <td><?php echo  $count ?></td>
                <td><?php echo $data['fullname'];?></td>
                <td><?php echo $data['age'];?></td>
                <td><?php echo $data['address'];?></td>
                <td><?php echo $data['gender'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['joined_date'];?></td>
                <td><?php echo $data['username'];?></td>
                <td><?php echo $data['password'];?></td>
                
                <td><button type="button" name> <?php echo $data['status'];?>  </button></td>
                <td>
                    <a href="edittask.php?id=<?php echo $data ['id']; ?>"><button style="background-color:#106399;padding:10px 15px;border-radius:5px;color:white; cursor: pointer;">EDIT</button></a><br><br>
                    <a href="process/deletetask.php?id=<?php echo $data ['id'];?>"><button style="background-color:#630700;padding:10px 18px;border-radius:5px;color:white; cursor: pointer;">Delete</button></a>
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
<script src="assets/js/admin.js"></script>
</body>
</html>