<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/logokam.png">

    <title>KAM- क्षॆत्र</title>
    <style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("backgroundimg.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
@media only screen and (max-width: 800px) {
 .hero-text h1{
    font-size:40px;

 }
 h1 img{
    height:50px;
 }
}


</style>
</head>
<body>
<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:60px"><img src="assets/images/logokam.png" alt="kamchettra logo" height="70px">| KAM- क्षॆत्र </h1>
    <i style="font-size:25px;">"Goals are dreams with deadlines."</i><br><br><br>
    <a href="AdminIndex.php"><button style="background-color:transparent;padding:15px 28px;border-radius:5px;color:white; cursor: pointer;font-size:18px;transition: all 0.5s;">ADMIN</button></a> &nbsp;&nbsp;
    <a href="user/Index.php"><button style="background-color:transparent;padding:15px 28px;border-radius:5px;color:white; cursor: pointer;font-size:18px;transition: all 0.5s;">USER</button></a>
         
  </div>
</div>
</body>
</html>