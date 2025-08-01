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
  <section class="header">
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
  <div class="text-box">
    <h1>Welcome to Peace Institute</h1>
    <p>source for quality education and personal growth.</p>
  </div>

  </section>

  <!---- Introduction ---->

  <section class="Introduction">
    <h1>Introduce</h1>
    <p>Welcome to the Peace Institute! We are dedicated to providing quality education and fostering a learning environment that promotes knowledge, growth, and understanding. Our institute offers a wide range of subjects, led by experienced and passionate staff members. Explore our website to learn more about our courses, staff, class timetables, and how to get in touch with us. Whether you're a student seeking educational opportunities or a parent looking for the best for your child, we're here to guide you on your journey to knowledge and success.</p>

    <div class="row">
      <div class="Introduction-col">
        <h3>Subjects Streams</h3>
        <p>All the strams of English,History,Maths,Science are conducted by our institute according to Ordinary Level.</p>
      </div>
      <div class="Introduction-col">
        <h3>Teaching Staff</h3>
        <p>Our institute has talented teachers related to every subject Streams.</p>
      </div>
      <div class="Introduction-col">
        <h3>Time Tables</h3>
        <p>You can download the time table of classes related to each stream from this website.</p>
      </div>
      <div class="Introduction-col">
        <h3>Contact Us</h3>
        <p>Information required to contact our institute can be obtained from this website.</p>
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
