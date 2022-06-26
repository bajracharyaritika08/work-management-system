<?php require('../connection/config.php')?>

<?php
session_start();


$email = $_POST['email'];
$password = $_POST['password'];

$s = "Select * from registration where email='$email' AND password ='$password'";
echo $s;

$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);
if($num==1){
    $_SESSION['email']=$email;
    echo header ("Location: UserDashBoard.php");
}
else{
  echo header("Location: Index.php");
}
?>
