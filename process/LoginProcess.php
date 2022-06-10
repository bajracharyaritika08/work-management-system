<?php require('../connection/config.php')?>
<?php
    if(isset($_POST['login'])){
        $email =$_POST['email'];
        $password =$_POST['password'];

        $query ="SELECT * From registration where email= '$email' and password = '$password'";
        $result = mysqli_query($conn, $query);
        $row = $result ->fetch_assoc();
        $count = mysqli_row_count($row);
        if(count == 1){
            echo header("location ")
        }
    }
?>