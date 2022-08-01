<?php require('../connection/config.php')?>

<?php
session_start();


$email = $_POST['email'];
$passwords = $_POST['passwords'];

$s = "Select * from admins where email='$email' AND passwords ='$passwords'";
echo $s;

$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);
if($num==1){
    $_SESSION['email']=$email;
    echo header ("Location: DashBoard.php");
}
else{
  echo header("Location: ../Index.php");
}
?>