<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="./Images/annaUniv.svg">
  <title>Department of Information Technology | MIT Campus, Anna University</title>
  <link rel="stylesheet" href="./CSS/navigator.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans">
</head>
<body>
<header>
<img src="./Images/annaUniv.svg" alt="">
<div class="heading">
<div class="heading-title">Department of Information Technology</div>
<div class="heading-dept">Anna University , MIT Campus</div>
</div>
<input type="checkbox" style="display:none"  id="nav-toggle" class="nav-toggle"> 
<nav>
    <a href="./">
        <i class="bi bi-house-door-fill"></i>
        Home
    </a>
    <a href="./aboutUs.php">
        <i class="bi bi-person"></i>
        About Us
    </a>        
    <a href="./hodDesk.php">
        <i class="bi bi-person-rolodex"></i>
        HOD's Desk
    </a>
    <a href="./faculties.php">
        <i class="bi bi-people-fill"></i>
        Faculty</a>
    <a href="./students.php">
        <i class="bi bi-mortarboard-fill"></i>
        Students</a>
    <a href="./curriculum.php">
        <i class="bi bi-book-half"></i>
        Curriculum</a>
    <a href="./infrastructure.php">
        <i class="bi bi-building"></i>
        Infrastructure</a>
    <a href="./research.php">
        <i class="bi bi-motherboard-fill"></i>
        Research</a>
    <a href="./events.php">
        <i class="bi bi-puzzle"></i>
        Events</a>
        
</nav>
<label for="nav-toggle">
    <span></span><i class="bi bi-x-lg"></i>
</label>
</header>
<?php
if(strpos($_SERVER['REQUEST_URI'], "aboutUs") == false)
    echo "<div class='container'>";
?>