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
    <link rel="icon" type="image/x-icon" href="../assets/images/logokam.png">
    <style>
        .cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
  border-radius:10px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
  border-radius:10px;
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
    </style>
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
                    <span class="text">Manage Users</span>
            </div>
            <div>
                <button class="newuser" onclick="document.getElementById('id01').style.display='block'"><a href="Registration.php">Add a new user.</a></button>
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
            <div class="flex-container product-list" id="product-list">
                  <div class="flex-item-left">
                        <div class="row product">
                        <div class="column" style="background-color: transparent;">
                            <img src="../assets/images/kamlogos.png" alt="user profile" height ="150px">
                            <p style="font-size:large;"><?php echo $data['fullname'];?></p>
                            <p></p>
                        </div>
                        <div class="column" style="background-color:transparent;text-align:left;font-size:large;"><br>
                            <p >Full Name:<?php echo $data['fullname'];?></p><br>
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
    
<!-- <div id="id01" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
        <p style="padding:10px;">Please enter password if you want to add new user.</p>
    <div class="container" style="background-color:#b6b8b8;">
    <input type="password" name="passwords" placeholder="Please enter password"><br><br><br>
    <input type="button" value="submit"  >
    <button type="button" onclick="document.getElementById('id01').style.display='none'" name="submit" id="sub">Cancel</button>
    </div>
  </form>
</div> -->
  </section>
</div> 
<script>
function myFunction() {
  alert("User Deleted Sucessfully! Press ok to continue.");
}
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// const search = () = >{
//     const searchbox = document.getElementById("search-item").value.toUpperCase();
//     const storeitems = document.getElementById("product-list")
//     const product = document.querySelectorAll(".product")
//     const pname = document.getElementsByTagName("")
// }
</script>
<script src="../assets/js/admin.js"></script>
</body>
</html>