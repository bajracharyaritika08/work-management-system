<?php require('../connection/config.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<style>
  
input[type=email],
input[type=date],
input[type=text],
input[type=password],
select,
textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
    background-color: transparent;
    color: grey;
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
    .col-25,
    .col-75,
    input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}

.newuser {
    
    border-radius: 5px;
    padding: 12px;
    color:white;
    cursor: pointer;
    background-color:#bd7706;
}

.newuser:hover {
    background-color: #f49511;
    color: white;
}

button a {
    text-decoration: none;
    color: white;
}


/* Here starts the css of the flex boxes */

.flex-container {
  display: flex;
  flex-direction: row;
  font-size: 30px;
  text-align: center;
  overflow-x:hidden;
}

.flex-item-left {
  background-color: transparent;
  padding: 10px;
  flex: 33.33%;
  margin:20px;
  border-style:solid;
  border-color:grey;
  height:250px;
  border-radius:10px;
  color:grey;
}
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 250px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}


@media (max-width: 800px) {
  .flex-container {
    flex-direction: column;
  }
}
</style>


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
                            <p>Joined Date: <?php echo $data['joined_date'];?></p><br>
                            <p>Username:<?php echo $data['email'];?></p>
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