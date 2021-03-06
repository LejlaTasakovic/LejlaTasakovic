<!DOCTYPE html>
<html>
    <head>
      <!--
Name: Lejla Tašaković
Course: CS412
Assignment: Resume Page
-->
    <meta name="description" content="Resume">
    <meta name="author" content="Lejla Tašaković">
    <meta name="course" content="CS412">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="xy.css">
      <script src="jquery-2.1.4.min.js"></script>
<script src="skill.bars.jquery.js"></script>
<script type="text/javascript" src="xyz.js"></script>


        <title>Lejla Tašaković</title>
    </head>
    <body>
        
        <div class="profile">
            <img src="https://scontent.fsjj1-1.fna.fbcdn.net/v/t1.0-9/s960x960/77192882_10216213995484047_4432456861366616064_o.jpg?_nc_cat=107&_nc_ohc=VyGwD-GIV2sAQlF8ziFEWzIlR2InadIliuunom-FjU0YNHfv5IOkWcuVg&_nc_ht=scontent.fsjj1-1.fna&oh=abfd03e49b3629a4fc62ce9f0f283008&oe=5E7E7305" class="selfie">
        <h1 id="name">Lejla Tašaković</h1>
        <h5 id="des">[Future] Software Engineer</h5>
        <br>
        <p>If you don't know who I am, then you can use the opportunity to get to know me now. <br>
I'm an ambitious student at the International University of Sarajevo, in the department Faculty of Engineering and Natural Sciences, and I am studying Software Engineering. <br></p>
</div>


<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <h3>Education</h3>
<hr>
 <dl>
<li>Elementary school: <a href="http://ismschool.com" style="color:white">Internatioinal School of Martyrs (I.S.M) </a></li>
<li>High school: <a href="http://www.bosnjackagim.edu.ba" style="color:white"> The First Bosniak High School </a> </li>
<li>University: <a href="https://www.ius.edu.ba" style="color:white"> International University of Sarajevo (IUS) - <a href="https://fens.ius.edu.ba" style="color:white">FENS</a> Software Engineering </a> </li>
</dl>
</div>
</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <h3>Skills</h3>
      <hr>
      <div class="skillbar clearfix " data-percent="67%">
  <div class="skillbar-title" style="background:lightseagreen;"><span>HTML</span></div>
  <div class="skillbar-bar" style="background: paleturquoise;"></div>
</div>

<div class="skillbar clearfix " data-percent="60%">
  <div class="skillbar-title" style="background: lightseagreen;"><span>CSS</span></div>
  <div class="skillbar-bar" style="background: paleturquoise;"></div>
</div>
</div> 

<div class="skillbar clearfix " data-percent="50%">
  <div class="skillbar-title" style="background: lightseagreen;"><span>JavaScript</span></div>
  <div class="skillbar-bar" style="background: paleturquoise;"></div>
</div>

<div class="skillbar clearfix " data-percent="71%">
  <div class="skillbar-title" style="background: lightseagreen;"><span>C</span></div>
  <div class="skillbar-bar" style="background: paleturquoise;"></div>
</div> 

<div class="skillbar clearfix " data-percent="80%">
  <div class="skillbar-title" style="background: lightseagreen;"><span>C++</span></div>
  <div class="skillbar-bar" style="background: paleturquoise;"></div>
</div> 

<div class="skillbar clearfix " data-percent="75%">
  <div class="skillbar-title" style="background: lightseagreen;"><span>Java</span></div>
  <div class="skillbar-bar" style="background: paleturquoise;"></div>
</div>

<div class="skillbar clearfix " data-percent="64%">
  <div class="skillbar-title" style="background: lightseagreen;"><span>Python</span></div>
  <div class="skillbar-bar" style="background: paleturquoise;"></div>
</div>

<div class="skillbar clearfix " data-percent="66%">
  <div class="skillbar-title" style="background: lightseagreen;"><span>SQL</span></div>
  <div class="skillbar-bar" style="background: paleturquoise;"></div>
</div>
      </div>
    </div>
  </div>


<div class="container">
  <div class="row">
    <div class="col-sm-8">
<h3>Working Experience</h3>
<hr>
<p style="color:black">
<dl>
<li>TA Calculus I</li>
<li>Robotics Workshop Instructor - BIT Alliance and IUS Lifelong Learning Centre</li>
<li>CoderDojo Instructor - BIT Alliance and IUS Lifelong Learning Centre</li>
<li> Programming Professor - School & School Sarajevo </li>
</dl>
</p>
</div>
</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
 <h3>Contact</h3> 
  <hr>
<p style="color:white"> 
<address>
Email me: <a href="mailto:lejlatasakovic@yahoo.com" style="color:white">Lejla Tašaković</a>.<br>
Call me: <a href="tel:+387 61/572-311" style="color:white">Lejla Tašaković</a> <br>
Behdžeta Mutevelića 91, Sarajevo<br>
Bosnia and Herzegovina 
</address>
</p>
</div>
</div>
</div>


<div class="container">
  <div class="row">
    <div class="col-sm-8">
 <h3>Leave your contact information</h3> 
  <hr>
      <section class="maincontent">
      <form class="form" action="abc.php" method="POST">
        <table style="margin-left:auto;margin-right:auto;">
        <p style="color:darkred">* required field</p>
          <tr>
            <td>*Name </td>
            <td><input type="text" id="name" name="name" required="1" /></td>
          </tr>
          <tr>
            <td>*E-mail </td>
            <td><input type="email" id="email" name="email" required="1"/></td>
          </tr>

          <tr>
            <td>Comment: </td>
            <td><textarea name="comment" id="comment" rows="10" cols="25" required="1"></textarea></td>
          </tr>

          <tr>
            <td></td>
            <td><input type="submit" id="submit" name="submit" value="Send"></td>
          </tr>
        </table>
</div>
</div>
</div>



<div class="container">
  <div class="row">
    <div class="col-sm-8">
        
        <div class="footer-social-icons">
    <ul class="social-icons">
        <li><a href="https://www.facebook.com/lejla.tasakovic" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
      <li><a href="https://www.linkedin.com/in/lejla-tašaković-269bba187/" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
      <li><a href="https://codepen.io/Lellzz" class="social-icon"> <i class="fa fa-codepen"></i></a></li>
        <li><a href="https://github.com/LejlaTasakovic" class="social-icon"> <i class="fa fa-github"></i></a></li> <li><a href="https://www.instagram.com/lell.z/" class="social-icon"> <i class="fa fa-instagram"></i></a></li>
       
    </ul>
</div>
</div>
</div>
</div> 
 

</body>
</html>