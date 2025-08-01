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
    <h1>About us</h1>
  </section>

   <!---- About us content ---->
   <section class="about-us">
    <div class="row">
      <div class="about-col">
        <h1>Our Mission</h1>
        <p>Our mission is to empower students with knowledge, critical thinking skills, and a deep sense of ethics. We strive to create an environment that encourages intellectual curiosity, creativity, and a strong sense of community.</p>
        <p>Our team of experienced and dedicated educators is at the heart of our institute. They bring years of expertise and a passion for teaching to inspire and mentor our students.</p>
      </div>
      <div class="about-col">
        <img src="images/clss2.jpg">
      </div>
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




