<?php
  include "ParentClass.php";
  include "ChildClass.php";

  $webOne = new ParentClass("CS1520", "Programming Languages for Web Applications", "Matt Bowytz");
  $webTwo = new ChildClass("CS1520", "Programming Languages for Web Applications", "Matt Bowytz", "5502 Sennott Square", "TuTh 6:00PM - 7:15PM");
  $algorithms = new ParentClass("CS1501", "Algorithm Implementation", "Nicholas Farnan");
  $digitalLab = new ChildClass("COE0501", "Digital Systems Laboratory", "Alex Jones", "1223B/C Benedum Hall", "TuTh 9:00AM - 10:50AM");
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="assignment3.css">
  <title>Assignment 3</title>
</head>
<body>
  <h1>CS 1520 - Assignment 3</h1>
  <p>Here are some of the courses I am taking this year.</p>
  
  <section class="course">
    <?= $webOne; ?>
  </section>
  
  <section class="course">
    <?= $webTwo; ?>
  </section>
  
  <section class="course">
    <?= $algorithms; ?>
  </section>
  
  <section class="course">
    <?= $digitalLab; ?>
  </section>
  
</body>
</html>
