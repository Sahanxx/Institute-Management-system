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
    <h1>Subject</h1>
  </section>


   <!---- Subject ---->
   <section class="subjects">
    <div class="row">
      <div class="subjects-col">
        <img src="images/english.jpg" alt="English">
      <h3>English</h3>
      <p>Improve your language skills and literary knowledge.</p>
      <a href="timetable.php">View Time Table</a>
      </div>
      <div class="subjects-col">
        <img src="images/history.jpg" alt="History">
        <h3>History</h3>
        <p>Discover the past and learn from it.</p>
        <a href="timetable.php">View Time Table</a>
      </div>
      <div class="subjects-col">
        <img src="images/maths.jpg" alt="Maths">
      <h3>Maths</h3>
      <p>Develop problem-solving and analytical thinking.</p>
      <a href="timetable.php">View Time Table</a>
      </div>
      <div class="subjects-col">
        <img src="images/science.jpg" alt="Science">
        <h3>Science</h3>
        <p>Explore the wonders of the natural world.</p>
        <a href="timetable.php">View Time Table</a>
      </div>

    </div>
  </section>

  <h4>Teachers</h4>
  
   <!---- Staff ---->
   <section class="staff">
    <div class="row">
      <div class="staff-col">
        <img src="images/te1.jpg" alt="English Teacher">
      <h3>English Teacher</h3>
      <p>Responsible for teaching English language and literature.<br>
      contac: +94705744289</p>
      <a href="timetable.php">View Time Table</a>
      </div>
      <div class="staff-col">
        <img src="images/te2.jpg" alt="History Teacher">
        <h3>History Teacher</h3>
        <p>Teaching history and helping students understand the past.<br>
          contac: +94772335289</p>
        <a href="timetable.php">View Time Table</a>
      </div>
      <div class="staff-col">
        <img src="images/te3.jpg" alt="Maths Teacher">
        <h3>Maths Teacher</h3>
        <p>Responsible for teaching various aspects of mathematics.<br>
          contac: +94712534561</p>
        <a href="timetable.php">View Time Table</a>  
      </div>
      <div class="staff-col">
        <img src="images/te4.jpg" alt="Science Teacher">
      <h3>Science Teacher</h3>
      <p>Teaching science and conducting experiments for a better understanding.<br>
        contac: +94765134239</p>
      <a href="timetable.php">View Time Table</a>
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




