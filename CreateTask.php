<?php require('connection/config.php')?>
<?php
//When a create a task form is submitted
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $priority = $_POST['priority'];
    $details = $_POST['details'];
    $deadline = $_POST['deadline'];

    if($title!="" && $priority!="" && $details!="" && $deadline!=""){
    //Insert into query pani ho 
    $create_query="INSERT INTO tasks(title,priority,details,deadline) VALUES ('$title','$priority','$details','$deadline')";
    //result vane variable ma execute garounay
    $create_result= mysqli_query($conn,$create_query);
    if($create_result){
        echo header('Location: managetasks.php?msg=csuccess');
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

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
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
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Create Task</span>
            </div>
            <div class="container">
                <form action="#" method="POST" enctype="multipart/form-data"  style="color:grey;">
                <div class="row">
                    <div class="col-25">
                        <label for="tasktitle">Task Title:</label>
                        </div>
                        <div class="col-75">
                        <input type="text" name="title" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="tasktitle">Task Priority:</label>
                        </div>
                        <div class="col-75">
                        <select name="priority" id="">
                            <option value="High">High</option>
                            <option value="Normal">Normal</option>
                            <option value="Low">Low</option>
                        </select >
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="tasktitle">Task Details:</label>
                        </div>
                        <div class="col-75">
                        <textarea name="details" id="" cols="10" rows="5" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="tasktitle">Task Deadline:</label>
                        </div>
                        <div class="col-75">
                        <input type="date" name="deadline" required><br><br>
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
       
    <script src="assets/js/admin.js"></script>
    </body>

</html>