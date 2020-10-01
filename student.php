<?php 

session_start();
if(isset($_SESSION['username'])){
  $_SESSION['msg']="You must log in to view this page";
  $semail=$_SESSION['username'];

    $sname=$_SESSION['name'];
    $sphone=$_SESSION['phone_no'];
  

}

if(isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.html");
}

 ?>



<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Profile: <?php echo $sname ?>  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
table {
  width:100%;
  padding-left: 50px
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
</style>

</style>

</head>

<body>
 <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="#">abhirupmajumder2@gmail.com</a>
        <i class="icofont-phone"></i> +91 7003891696
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://twitter.com/AbhirupMajumder" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/__magical_._mutes__/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html"><img src="assets/img/icons/icon_main.png"><span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
         
          <li class="drop-down"><a href="#services ">Academics</a>
           <ul>
              <li class="drop-down"><a href="#">Departments</a>
               
              </li>
              <li class="drop-down"><a href="#">Syllabus</a>
              <ul>
              
              
            </ul></li>
              <li><a href="#">Research and Development</a></li>
              <li><a href="#">Attendance Management</a></li>
              
              
            </ul>
          </li>
          
          <li><a href="#register">Register</a></li>
          <li><a href="#bulletin">Bulletion Board</a></li>

          <li><a href="#Online_resoures">Online Resources</a></li>
          
          <li><a href="#profile">My Profile</a></li>
          <li class="drop-down"><?php echo $sname ?> 
    
  
<ul>
  <li><a href="login.html?logout='1'">logout</a></li>
</ul>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container cla" data-aos="zoom-out" data-aos-delay="100" >
      <h1>Welcome to <span>Passion & Education</spa>
      </h1>
      <br>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

<section id="profile">
    <p style="padding-right: 1000px;">
    <div class="form_des" style="padding-right:  400px;padding-left: 200px;">
      <div class="section-title">
          <h2>My Profile</h2>
         
        </div>
    
    <h4><p style="border:5px double black;padding: 10px;">Name : <?php echo $sname ?></p>
       <p style="border:5px double black;padding: 10px;"> E-mail : <?php echo $semail ?></p></p>
       
      </h4>
    
</div></p>

  </section>
  	

   <!-- End Skills Section -->

    <!-- ======= Counts Section ======= -->
    <section id="bulletin" class="section-title">
      <div class="container" data-aos="fade-up">

       <p><b><h2 >BULLETIN BOARD</h2></b></p>
       <div class="sty">
        <marquee direction="up">
        <h3>All Classes are suspended due to Covid-19 Pandemic till further notice.</h3><br>
        <h3>Class 6 class has been rechudeled . New dates will be given soon.</h3><br>
        <h3>Please pay your remaining dues till month September. </h3><br>
        <h3>Download Online Resorces available.  </h3>
       </div>
     </marquee>
      </div>
    </section><!-- End Counts Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="design">

        <caption><div class="section-title">
          <h2>My Time Table</h2>
         
        </div>
    </caption>
      <table id="t01" class="design" background=url('img_girl.jpg');>
        
         
        <tr>
          <th></th>
          <th>
          Monday
        </th>
        <th>
          Tuesday
        </th>
        <th>
          Wednesday
        </th>
        <th>
          Thursday
        </th>
        <th>
          Friday
        </th>
        <th>
          Saturday
        </th>
        <th>
          Sunday
        </th>
      </tr>
        <tr>
          <td>Period1</td>
          <td>History</td>
          <td>Language 1</td>
          <td> Language 2
            </td>
          <td>Maths</td>
          <td>Basic Science</td>
          <td>Maths</td>
          <td></td>
        </tr>
        <tr>
          <td>Period2</td>
          <td>Language 1</td>
          <td>Maths</td>
          <td>Work Edu</td>
          <td>History</td>
          <td>Geogerphy</td>
          <td>History</td>
          <td>F</td>
        </tr>
        <tr>
          <td>Period3</td>
          <td>Work Edu</td>
          <td>History</td>
          <td>Maths</td>
          <td>Basic Science</td>
          <td>Language 1</td>
          <td>Language 2</td>
          <td>R</td>
        </tr>
        <tr>
          <td>Period4</td>
          <td>Geogerphy</td>
          <td>Language 2</td>
          <td>Language 1</td>
          <td>History</td>
          <td>Maths</td>
          <td>Work Edu</td>
          <td>E</td>
        </tr>
        <tr>
          <td>Period5</td>
          <td>Language 2</td>
          <td>Geogerphy</td>
          <td>Geogerphy</td>
          <td>Language 2</td>
          <td>History</td>
          <td>Basic Science</td>
          <td>E</td>
        </tr>
        <tr>
          <td>Period6</td>
          <td>Maths</td>
          <td>Basic Science</td>
          <td>History</td>
          <td>Geogerphy</td>
          <td>Language 2</td>
          <td>Nil</td>
          <td></td>
        </tr>
      
      </table></div>
        
    </section><!-- End About Section -->

    <!-- ======= Enter new student details ======= -->
    

    
   

  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Passion & Education</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by Abhirup Majumder
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<!--<script>
  $(document).ready(function(){
    $('free,#nom').keyup(function(){
      var textValue1=$('$free').val();
      var textValue2=$('$nom').val();
      $('tamt').val(textValue1 * textValue2);
    });
  });

</script>*/-->
