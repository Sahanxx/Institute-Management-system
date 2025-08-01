<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: login.php");
   }
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-with", initial-scale=1.0">
  <title>Peace Institute - Home</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <section class="sub-header">
    <nav>
      <a href="index.html"><img src="images/IMG_2953.png"></a>
      <div class="nav-links">
        <ul>
        <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="Course.php">Subject</a></li>
          <li><a href="timetable.php">Time Table</a></li>
          <li><a href="contact.php">Contact</a></li>
		      <li><a href="php/logout.php">Logout</a></li>
        </ul>

      </div>
    </nav>
    <h1>Contact us</h1>
  </section>

   <!---- contact us ---->
   <section class="contact us">
    <div class="row">
      <div class="contact-col">
        <div>
          <i class="fa fa-home"></i>
          <span>
            <h5>Address: Airport Road, NYC Building</h5>
            <p>Anuradhapura</p>
          </span>
        </div>
        <div>
          <i class="fa fa-phone"></i>
          <span>
            <h5>Phone: +94771378459</h5>
            <p>Monday to Friday, 9AM to 4PM</p>
          </span>
        </div>
        <div>
          <i class="fa fa-envelope-o"></i>
          <span>
            <h5>Email: sahananjana63@gmail.com</h5>
            <p>Email us your query</p>
          </span>
        </div>
      </div>
      <section class="location">
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.068780556228!2d80.43089167484989!3d8.29595429173902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afcf4ee41334703%3A0x4f46442e5818819b!2sAirport%20Rd%2C%20Anuradhapura!5e0!3m2!1sen!2slk!4v1701595574420!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


   </section>
    </div>

   </section>
  


   <!---- Footer ---->

   <section class="footer">
    <h4>About Us</h4>
    <p>At Peace Institute, we are committed to shaping the minds of tomorrow's leaders and fostering a community of learners dedicated to academic excellence and personal growth.<br> Established with a vision to provide a holistic education, we take pride in our values and principles that
      guide our educational approach.
    </p>
    <p>&copy; 2023 Peace Institute</p>
   </section>




