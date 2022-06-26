<?php require('../connection/config.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/ManageUser.css">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<body>
<?php include('../inc/sidebar.php')?>
<section class="dashboard" id="dasbboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here..." name="search" id="search" onkeyup="searchFun()">
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
            </div>   <br>
            <span style="color:red;font-size:larger;">Notice! Once you add a new user s/he can have access to view the assigned work.</span><br> <br>

            <span style="color:green;font-size:larger;">Active Employees</span>
            <br><br>
            <?php
            $select_query ="SELECT * FROM registration ORDER BY reg_id DESC";
            $select_result =mysqli_query($conn, $select_query);
            $count = 0;
            while($data = mysqli_fetch_array($select_result))
            {
                $count += 1;
        ?>
            <div class="flex-container">
                  <div class="flex-item-left">
                        <div class="row">
                        <div class="column" style="background-color: transparent;">
                            <img src="../assets/images/kamlogos.png" alt="user profile" height ="150px">
                            <p style="font-size:large;"><?php echo $data['fullname'];?></p>
                            <p></p>
                        </div>
                        <div class="column" style="background-color:transparent;text-align:left;font-size:large;"><br>
                            <p>Full Name:<?php echo $data['fullname'];?></p><br>
                            <p>Joined Date: <?php echo $data['joined_date'];?></p><br>
                            <p>Username:<?php echo $data['username'];?></p>
                        </div>
                        <div class="column" style="background-color:transparent;font-size:large;">
                        <p>Modify User</p><br>
                        <a href="EditUser.php?id=<?php echo $data ['reg_id']; ?>"><button style="background-color:#bd7706;padding:10px 15px;border-radius:5px;color:white; cursor: pointer;">View User Details</button></a>
                    <a href="deleteusers.php/?reg_id=<?php echo $data ['reg_id'];?>"><button style="background-color:#8f0909;padding:10px 18px;border-radius:5px;color:white; cursor: pointer;" onclick="myFunction()">Delete User</button></a>

                        </div>
                        </div>
                  </div><br>
                </div>

                <?php
            }
            ?>  
    </div>    
  </section>
</div> 
<script>
function myFunction() {
  alert("User Deleted Sucessfully! Press ok to continue.");
}
</script>
<script src="../assets/js/admin.js"></script>
</body>
</html>