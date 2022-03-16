<?php 
  if(!isset($_GET['id'])){
    echo '<script language="javascript">';
    echo 'alert("Unauthorized Access!!Please Login");';
    echo 'window.location="/"';
    echo '</script>';
  }
  echo '<script>const ID ='.$_GET["id"].';</script>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./admin.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="./faculty.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <img src="../Images/annaUniv.svg" alt="">
    <div class="heading">
    <div class="heading-title">Department of Information Technology</div>
    <div class="heading-dept">Anna University , MIT Campus</div>
    </div>
    <a href="/" tooltip="logout"><i class="bi bi-box-arrow-right"></i> <span>Logout</span></a> 
  </header>
  <div class="intro-container" id="primaryForm">
    <img src="?m=' . filemtime('image.jpg') . '" alt="" id="profilePic">
    <label for="name">Name :</label>
    <input type="text" name="name" id="name">   
    <label for="designation">Designation :</label>
    <input type="text" name="designation" id="designation">
    <label for="AOS">Area Of Spacification :</label>
    <input type="text" name="AOS" id="AOS">
    <label for="email">Email ID :</label>
    <input type="text" name="email" id="email">
    <label for="phone">Phone Number :</label>
    <input type="text" name="phone" id="phone">
    <label for="acoe">ACOE Site :</label>
    <input type="text" name="acoe" id="acoe">
    <label for="personal-site">Personal Site :</label>
    <input type="text" name="personal-site" id="personal-site">
    <label for="image">Profile Image :</label>
    <input type="file" name="image" id="image">
    <button id="primaryUpd" onclick="updatePrimary()">
      Update Information
      <label  id="updateMsg-P">Basic Information Update Completed !!</label>
    </button>        
  </div>
  <h1>Add Fields :</h1>
  <select name="" id="AvailFields">
    <option value="">Hello</option>
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
  </select>
  <h1>Fields</h1>
  <div class="detail-option" id="list">
  </div>
  <h2 id="field-title"></h2>
  <button onclick="appendContent()"><i class="bi bi-plus-circle-dotted"></i> Add</button>
  <button onclick="updateContent()">
    <i class="bi bi-box-arrow-in-up"></i> Update
    <div id="upd-msg" class="upd-msg">Content Updated !!</div>
  </button>
  <div class="faculty-details" id="display-contents">
    
  </div>  
</body>
</html>