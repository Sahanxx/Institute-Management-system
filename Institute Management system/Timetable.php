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
    <h1>Timetable</h1>
  </section>

   <!---- Timetable ---->
   <section class="Timetable">
    <section id="subject">
      <table>
        <tr>
          <th>Time/Day</th>
          <th>Monday</th>
          <th>Tuesday</th>
          <th>Wednesday</th>
          <th>Thursday</th>
          <th>Friday</th>
        </tr>
        <tr>
          <td>9:00 AM - 11:00 AM</td>
          <td>English</td>
          <td>Science</td>
          <td>Maths</td>
          <td>English</td>
          <td>History</td>
        </tr>
        <tr>
          <td>10:00 AM - 12:00 PM</td>
          <td>Maths</td>
          <td>History</td>
          <td>Science</td>
          <td>Maths</td>
          <td>English</td>
        </tr>
        <tr>
          <td>1:00 PM - 3:00 PM</td>
          <td>History</td>
          <td>Maths</td>
          <td>English</td>
          <td>Science</td>
          <td>Maths</td>
        </tr>
        <tr>
          <td>2:00 PM - 4:00 PM</td>
          <td>Science</td>
          <td>English</td>
          <td>History</td>
          <td>Maths</td>
          <td>Science</td>
        </tr>
        <!-- Add more rows for additional time slots if needed -->
      </table>
    </section>
  </section>
  


   <!---- Footer ---->

   <section class="footer">
    <h4>About Us</h4>
    <p>At Peace Institute, we are committed to shaping the minds of tomorrow's leaders and fostering a community of learners dedicated to academic excellence and personal growth.<br> Established with a vision to provide a holistic education, we take pride in our values and principles that
      guide our educational approach.
    </p>
    <p>&copy; 2023 Peace Institute</p>
   </section>




