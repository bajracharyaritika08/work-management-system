<?php require('../connection/config.php')?>

<!-- To show the data into the khali fields when user visits edit page -->
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $show_query= "SELECT * FROM tasks WHERE id=$id";
    $show_result = mysqli_query($conn,$show_query);
    $row = $show_result->fetch_assoc(); 
    //row vane euta asociative array ma we store.
    $title = $row['title'];
    $priority = $row['priority'];
    $details = $row['details'];
    $deadline = $row['deadline'];
    $status = $row['status'];
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

    <title>Admin Dashboard Panel</title>
</head>
<style>
    label{
        color:grey;
    }
</style>
<body>
    <?php include('../inc/sidebar.php')?>
    <section class="dashboard" id="dashboard">
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
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Edit Task</span>
            </div>
               
<?php
//When a create a task form is submitted
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $priority = $_POST['priority'];
    $details = $_POST['details'];
    $deadline = $_POST['deadline'];
    $status = $_POST['status'];
  

    if($title!="" && $priority!="" && $details!="" && $deadline!="" && $status!="" ){
    //Update query yeta lekheko 
    $edit_query ="UPDATE tasks SET title='$title', priority='$priority', details='$details', deadline='$deadline',status='$status' WHERE id=$id";
    $edit_result= mysqli_query($conn,$edit_query);
    if($edit_result){
        echo "Task Updated successufuly";
    }
    else{
        echo "Couldn't perform the requested task.";
    }
}else{
    echo 'Please fill all the datas';
}
}
?>
<form action="#" method="POST" enctype="multipart/form-data" style="color:white;padding:20px; >
    <label for="tasktitle">Task Title:</label>
    <input type="text" name="title" required value="<?php echo $title;?>"><br><br>
    <label for="taskpriority">Task Priority:</label>
    <select name="priority" id="">
        <?php
            if($priority=="Normal"){
                ?>
                    <option value="Normal" selected><?php echo $priority;?></option>
                    <option value="High">High</option>
                    <option value="Low">Low</option>
                    <?php
            }else if($priority=="High"){
                ?>
                    <option value="High" selected><?php echo $priority;?></option>
                    <option value="Normal">Normal</option>
                    <option value="Low">Low</option>
                    <?php
            }else{
                ?>
                    <option value="Low" selected><?php echo $priority;?></option>
                    <option value="High">High</option>
                    <option value="Low">Low</option>
                <?php
            }
        ?>
    </select ><br><br>
    <label for="tasktitle">Task Details:</label>
    <textarea name="details" id="" cols="10" rows="5"  required><?php echo $details; ?></textarea><br><br>
    <label for="tasktitle">Task Deadline:</label>
    <input type="date" name="deadline"  value="<?php echo $deadline;?>" required><br><br>
    
    <label for="tasktitle">Status:</label>
    <select name="status" id="">
    <?php
            if($status=="New"){
                ?>
                    <option value="New" selected><?php echo $status;?></option>
                    <option value="Progess">Progress</option>
                    <option value="Done">Done</option>
                    <option value="Cancelled">Cancelled</option>
                    <?php
            }else if($status=="Progress"){
                ?>
                    <option value="Progress" selected><?php echo $status;?></option>
                    <option value="New">New</option>
                    <option value="Done">Done</option>
                    <option value="Cancelled">Cancelled</option>
                    <?php
            }else if ($status=="Done"){
                ?>
                    <option value="New" selected><?php echo $status;?></option>
                    <option value="Progess">Progress</option>
                    <option value="Done">Done</option>
                    <option value="Cancelled">Cancelled</option>
                <?php
            }else{
                ?>
                    <option value="<?php echo $status;?>" selected></option>
                    <option value="Progess">Progress</option>
                    <option value="Done">Done</option>
                    <option value="New">New</option>
                    <?php
            }
        ?>
    </select ><br><br>
    <button type="submit" name="submit">Submit</button>
</form>

            </div> 
                </section>
        </div>
    <script src="../assets/js/admin.js"></script>
    </body>

</html>