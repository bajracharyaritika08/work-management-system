<?php require('../connection/config.php')?>
<?php
    if(isset($_POST['login'])){
        $email =$_POST['email'];
        $password =$_POST['password'];

        $query ="SELECT * From admin where email= '$email' and password = '$password'";
        $result = mysqli_query($conn, $query);
        $count = mysqli_num_rows($result);
        if($count == 1){
            echo header("location : ../admin/DashBoard.php");
        }else{ 
            echo header("Location : ../index.php?msg=loginerror");   
        }
    }
?>