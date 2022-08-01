<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/logokam.png">
    <link rel="stylesheet" href="zhomepage/styles/Stylesh.css" >
    <link rel="stylesheet" href="zhomepage/styles/Stylesh.scss" >
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>KAM- क्षॆत्र</title>
    <style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.hero-texts {
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.img-container {
    background-image: url("zhomepage/images/heroimag.png");
    height: 50%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

.hero-texted {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: grey;
  line-height: 1.6;
}
@media only screen and (max-width: 800px) {
 .hero-text h1{
    font-size:40px;

 }
 
}


</style>
</head>
<body>
  <!-- navbar starts here! -->
  <div class="nav-top">
        <p class="number"><i class="fas fa-mobile-alt"></i> 9810080214</p>
        <p><i class="far fa-envelope"></i> info@kamchettra.com</p>
        <span>  <i class="fab fa-facebook-f"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-google-plus-g"></i>
        <i class="fab fa-linkedin-in"></i>
        <i class="fab fa-twitter"></i></span>
    </div>
    <hr>
    <nav>
        <div class="logo">
            <img src="assets/images/logokam.png" alt="mt" height="60px" width="60px">
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#aboutus">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contactus">Contact</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
<div class="hero-texts">
  <div class="hero-texted">
    <h1 >Organize your <br> work and life, finally with KAM- क्षॆत्र. </h1>
    <p>
    <i style="font-size:15px;">"Goals are dreams with deadlines."</i>
    </p><br>
    <a href="#"><button class="bookbtn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">GET STARTED !</button></a>
    <!-- <a href="AdminIndex.php"><button style="background-color:transparent;padding:15px 28px;border-radius:5px;color:white; cursor: pointer;font-size:18px;transition: all 0.5s;">ADMIN</button></a> &nbsp;&nbsp;
    <a href="user/Index.php"><button style="background-color:transparent;padding:15px 28px;border-radius:5px;color:white; cursor: pointer;font-size:18px;transition: all 0.5s;">USER</button></a>
          -->
  </div>
</div>
<div class="img-container">

</div>
<!-- Here starts the content -->
<div class="specifica" id="aboutus">
        <h1 class="specific"> Why <span class="specification"> KAM-क्षॆत्र?</span> </h1>
</div>
<!-- Here starts the card section -->
<div class="card-flex">
  <div class="column1">
    <i class="uil  uil-arrow-growth"></i>
    <h2>Increase productivity</h2>
    <p>Teams using KAM-CHETTRA are 45% more efficient. Automate routine work. Turn communication into action. And bring good ideas to life faster.</p>
  </div>
  <div class="column2">
  <i class="uil uil-clipboard-notes"></i>
  <h2>Streamline management</h2>
    <p>According to 82% of customers, KAM_-CHETTRA gives teams greater clarity. Because everyone knows the plan, the process, and where work stands.</p>
 
  </div>
  <div class="column3">
  <i class="uil uil-crosshairs"></i>
  <h2>Improve visibility</h2>
    <p>80% of customers say KAM-CHETTRA increases accountability. With everything teams need to know and do in one place, you can stay aligned on responsibilities and goals.</p>
 
  </div>
</div>
<!-- services -->
<div class="services-holder" id="services">
<div class="explore">
        <h1 class="exploresp">EXPLORE OUR <span class="specification">SERVICES</span> 
        </h1>
        <p class="budget">CHOOSE YOUR ENVIRONMENT</p>
        <div class="card">
            <div class="card1">
                <img src="zhomepage/images/happygirl.jpg" alt="card1" class="card01">
                <h2 class="budgeth2">FREE TRIAL</h2>
                <p class="budgeth2">Free trial for 1 month!</p>
                <div class="dividerr"></div>
                <div class="content-btn">
                    <p class="budgeth2"><span>$0 /</span> month</p>
                    <button class="btn-dtls">VIEW DETAILS</button>
                </div>
            </div>
            <div class="card1">
                <img src="zhomepage/images/threepeoples.jpg" alt="card1" class="card01">
                <h2 class="budgeth2">Medium Ranged</h2>
                <p class="budgeth2">For small circles</p>
                <div class="dividerr"></div>
                <div class="content-btn">
                    <p class="budgeth2"><span>$50 /</span> month</p>
                    <button class="btn-dtls">VIEW DETAILS</button>
                </div>
            </div>
            <div class="card1">
                <img src="zhomepage/images/many.jpg" alt="card1" class="card01">
                <h2 class="budgeth2">Premium Package</h2>
                <p class="budgeth2">For large offices</p>
                <div class="dividerr"></div>
                <div class="content-btn">
                    <p class="budgeth2"><span>$170 /</span> months</p>
                    <button class="btn-dtls">VIEW DETAILS</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
<!-- Contact us page starts here-->
<div class="contact-container" id="contactus">
<h1 class="exploresp">CONTACT <span class="specification">US</span><i class="uil uil-envelope-alt"></i> </h1> <br><br><br><br>
<div class="con-map">
  <div class="rows">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d467.9361578368045!2d85.30845253927635!3d27.67453807502398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1833e6b3e205%3A0x76ca1abd0d699e69!2sDAV%20College!5e0!3m2!1sen!2snp!4v1656787303855!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>
  <?php require('connection/config.php')?>

  <div class="rows container">

    <form method="POST" enctype="multipart/form-data">
      <h2>To get in touch.</h2>
      <?php
//When a create a task form is submitted

 
if(isset($_POST['contact-form'])){
    $fname = $_POST['fname'];
    $countries = $_POST['countries'];
    $longtextmessages =$_POST['longtextmessages'];
    if($fname!="" && $countries!="" && $longtextmessages!=""){
    //Insert into query pani ho 
    $create_query="INSERT INTO messagess (fname, nationality, longtextmessages) VALUES ('$fname','$countries','$longtextmessages')";
    //result vane variable ma execute garounay
    $create_result= mysqli_query($conn,$create_query);
    if($create_result){
        echo "<div class='uil'>Working</div>";
    }
    else{
        echo "Couldn't perform the requested task.";
    }
}else{
    echo 'Please fill all the datas';
}
}
?>
      <input type="text" name="fname" placeholder="Please enter your full name.">
      <select name="countries" id="countries"></select>
      <textarea id="subject" name="longtextmessages" placeholder="Write something.." style="height:200px"></textarea>
      <button class="bookbtn" value="submit" name="contact-form">Submit</button>
  </div>
</div>
</div>
<div class="footer">
  <p>Copyright KAM CHETTRA © 2022</p>
</div>
<!-- Contact us page ends here-->
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <p class="continueas">Continue As:</p><br>
    <div class="btns-container">
    <a href="AdminIndex.php">ADMIN </a>
    <a href="user/Index.php">USER </a>

    </div>
   
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
  document.addEventListener('DOMContentLoaded', () => {

const selectDrop = document.querySelector('#countries');
// const selectDrop = document.getElementById('countries');


fetch('https://restcountries.com/v3.1/all').then(res => {
    return res.json();
}).then(data => {
    let output = "";
    data.forEach(country => {
        output += `
    
    <option value="${country.name.common}">${country.name.common}</option>`;
    console.log(country.name.common);
    })

    selectDrop.innerHTML = output;
}).catch(err => {
    console.log(err);
})


});
</script>
<script src="zhomepage/js/apps.js"></script>
</body>
</html>