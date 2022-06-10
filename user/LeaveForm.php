<?php require('../connection/config.php')?>
<?php
//When a create a task form is submitted
if(isset($_POST['submit'])){
    $leave_title = $_POST['title'];
    $leave_details = $_POST['details'];
    $from = $_POST['from'];
    $upto = $_POST['to'];

    if($leave_title!="" && $leave_details!="" && $from!="" && $upto!=""){
    //Insert into query pani ho 
    $create_query="INSERT INTO leave_records(leave_id,leave_details,form,upto) VALUES ('$leave_title','$leave_details','$from','$upto')";
    //result vane variable ma execute garounay
    $create_result= mysqli_query($conn,$create_query);
    if($create_result){
        echo header('Location: leave.php?msg=csuccess');
    }
    else{
        echo "Couldn't perform the requested task.";
    }
}else{
    echo 'Please fill all the datas';
}
}
?>
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
            
            <div class="container">
                <form action="#" method="POST" enctype="multipart/form-data"  style="color:grey;">
                <div class="row">
                    <div class="col-25">
                        <label for="leavetitle">Reason for Leave:</label>
                        </div>
                        <div class="col-75">
                        <input type="text" name="leavetitle" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="leave_details">Reasons for leave:</label>
                        </div>
                        <div class="col-75">
                        <textarea name="leave_details" id="" cols="10" rows="5" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="form">From:</label>
                        </div>
                        <div class="col-75">
                        <input type="date" name="form" required><br><br>
                          </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="upto">To:</label>
                        </div>
                        <div class="col-75">
                        <input type="date" name="upto" required><br><br>
                        <button type="submit" name="submit" class="submit-btn" style="background-color:#029609;padding:10px 15px;border-radius:5px;color:white; cursor: pointer;">Submit</button>
                    </div>
                </div>
<!-- 
                            <label for="tasktitle">Task Title:</label>
                            <input type="text" name="title" required><br><br>
                            <label for="tasktitle">Task Priority:</label>
                            <select name="priority" id="">
                            <option value="High">High</option>
                            <option value="Normal">Normal</option>
                            <option value="Low">Low</option>
                            </select ><br><br>
                            <label for="tasktitle">Task Details:</label>
                            <textarea name="details" id="" cols="10" rows="5" required></textarea><br><br>
                            <label for="tasktitle">Task Deadline:</label>
                            <input type="date" name="deadline" required><br><br>
                            <button type="submit" name="submit">Submit</button> -->
                </form>
</div>          




            </div> 
                </section>
        </div>
       
    <script src="../assets/js/admin.js"></script>
    </body>

</html>