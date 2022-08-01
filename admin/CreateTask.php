<?php require('../connection/config.php')?>
<?php
//When a create a task form is submitted
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $priority = $_POST['priority'];
    $fullname =$_POST['fullname'];
    $details = $_POST['details'];
    $deadline = $_POST['deadline'];
    if($title!="" && $priority!="" && $fullname!="" && $details!="" && $deadline!="" ){
    //Insert into query pani ho 
    $create_query="INSERT INTO tasks(title, priority, assigned_to, details, deadline) VALUES ('$title','$priority','$fullname','$details','$deadline')";
    //result vane variable ma execute garounay
    $create_result= mysqli_query($conn,$create_query);
    if($create_result){
        echo header('Location: ManageTasks.php?msg=csuccess');
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
    <link rel="stylesheet" href="../assets/css/CreateTask.css">
    <!----===== Iconscout CSS ===== -->
    <link rel="icon" type="image/x-icon" href="../assets/images/logokam.png">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Create Task.</title>
</head>
<body>
    
    <?php include('../inc/sidebar.php')?>
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
                        <label for="priority">Task Priority:</label>
                        </div>
                        <div class="col-75">
                        <select name="priority" id="">
                            <option value="High">High</option>
                            <option value="Normal">Normal</option>
                            <option value="Low">Low</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="fullname">Assigned To:</label>
                        </div>
                        <div class="col-75">
                            <?php
                            $resultSet = $conn->query("Select fullname FROM registration");
                            ?>
                        <select name="fullname" id="">
                            <?php
                            while($rows = $resultSet->fetch_assoc())
                            {
                                $fullname = $rows ['fullname'];
                                echo "<option value='$fullname'>$fullname</option>";
                            }
                            ?>
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
       
    <script src="../assets/js/admin.js"></script>
    </body>

</html>