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

    <title>Admin Dashboard Panel</title>
</head>
<style>
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
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


@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}



.flex-container {
  display: flex;
  flex-direction: row;
  font-size: 30px;
  text-align: center;
}

.flex-item-left {
  background-color: #9E9E9E;
  padding: 10px;
  flex: 33.33%;
  margin:20px;
}

.flex-item-right {
  background-color: #9E9E9E;
  padding: 10px;
  flex: 33.33%;
  margin:20px;
}
.flex-item-middle{
  background-color: #9E9E9E;
  padding: 10px;
  flex: 33.33%;
  margin:20px;

}
@media (max-width: 800px) {
  .flex-container {
    flex-direction: column;
  }
}

</style>

<body>
    
    <?php include('inc/sidebar.php')?>
    <section class="dashboard" id="dasbboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="search-box">
            </div>
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-notebooks"></i>
                    <span class="text">To Dos</span>
                </div>
                <div class="flex-container">
                  <div class="flex-item-left">
                    <h6>Create Task</h6><hr style="color:black;">
                    <h6><a href="createtask.php">Assign a Task</a></h6>
                  </div><br>
                  <div class="flex-item-middle">
                    <h6>Manage Tasks</h6><hr>
                    <h6><a href="managetasks.php">Tasks</a></h6>
                  </div><br>
                  <div class="flex-item-right">okk</div>
                </div>
            </div>          
        </div> 
    </section>    
    <script src="assets/js/admin.js"></script>
    </body>

</html>