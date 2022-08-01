<?php require('../connection/config.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Admin</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/ManageAdmin.css">
    <link rel="icon" type="image/x-icon" href="../assets/images/logokam.png">
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
                <i class="uil  uil-shield-exclamation"></i>
                    <span class="text">Manage Admin </span>
            </div>
            <div>
                <button class="newuser"><a href="AdminRegister.php">Add a New Supervisor <i class="uil  uil-shield-exclamation"></i>.</a></button>
            </div>   <br>
            <span style="color:red;font-size:larger;">Notice! Once you add a new supervisor s/he will have the same previliage as you have.</span><br> <br>
            <span style="color:green;font-size:larger;">Active Supervisors</span>
            <br><br>
            <?php
            $select_query ="SELECT * FROM admins ORDER BY admin_id DESC";
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
                            
                            <p>Username:<?php echo $data['email'];?></p>
                        </div>
                        <div class="column" style="background-color:transparent;font-size:large;">
                        <p>Modify User</p><br>
                    <a href="DeleteAdmin.php/?reg_id=<?php echo $data ['admin_id'];?>"><button style="background-color:#8f0909;padding:10px 18px;border-radius:5px;color:white; cursor: pointer;">Delete User</button></a>

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
  alert("Admin Deleted Sucessfully! Press ok to continue.");
}
</script>
<script src="../assets/js/admin.js"></script>
</body>
</html>