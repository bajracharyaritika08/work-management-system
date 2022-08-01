<?php require('../connection/config.php')?>

<!-- To show the data into the khali fields when user visits edit page -->
<?php

if(isset($_GET['id'])){
    $task_id = $_GET['id'];
    $show_query= "SELECT * FROM tasks WHERE task_id=$task_id";
    $show_result = mysqli_query($conn,$show_query);
    $row = $show_result->fetch_assoc(); 
    //row vane euta asociative array ma we store.
  
    $remarks = $row['remarks'];
   
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

<body>
    <?php include('../userinc/sidebar.php')?>
    <section class="dashboard" id="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            
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
    
    $remarks = $_POST['remarks'];
    
    $status = $_POST['status'];

    if($remarks!="" && $status!=""){
    //Update query yeta lekheko 
    $edit_query ="UPDATE tasks SET remarks='$remarks', status='$status' WHERE task_id=$task_id";
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
<form action="#" method="POST" enctype="multipart/form-data" style="color:grey;padding:20px; ">
    
    <label for="remarks">Remarks:</label>
    <p>
    <span style="color:red;font-size:larger;">**Make sure to mention your name and department once you edit the task details.</span><br> <br>
    </p>
    <p>
    <span style="color:pink;font-size:larger;">For example: <br> Last Edit : (Full Name) (Department)</span><br> <br>
    </p>
    
    <textarea name="remarks" id="" cols="10" rows="5"  required><?php echo $remarks; ?></textarea><br><br>
    
    <label for="tasktitle">Status:</label>
    <select name="status" id="">
    <?php
            if($status=="New"){
                ?>
                    <option value="New"  selected><?php echo $status;?></option>
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
                    <option value="Done" selected><?php echo $status;?></option>
                    <option value="Progess">Progress</option>
                    <option value="New">New</option>
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