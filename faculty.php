<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
        <a href="#">
          <i class="bi bi-house-door-fill"></i>
          Home
        </a>        
        <a href="#">
          <i class="bi bi-person-rolodex"></i>
          HOD's Desk</a>
        <a href="#">
          <i class="bi bi-images"></i>
          Gallery
        </a>
        <a href="#">
          <i class="bi bi-people-fill"></i>
          Faculty</a>
        <a href="./students.html">
          <i class="bi bi-mortarboard-fill"></i>
          Students</a>
        <a href="./curriculum.html">
          <i class="bi bi-book-half"></i>
          Curriculum</a>
        <a href="./infrastructure.html">
          <i class="bi bi-building"></i>
          Infrastructure</a>
        <a href="#">
          <i class="bi bi-motherboard-fill"></i>
          Research</a>
        <a href="#">
          <i class="bi bi-puzzle"></i>
          Events</a>
          
    </nav>
    <label for="nav-toggle">
      <span></span><i class="bi bi-x-lg"></i>
    </label>
  </header>
  <div class="body-start"></div>
  <div class="faculty">
    <img src="./Images/faculty/1981.webp" alt="">
    <p>Name</p>
    <p>Designation</p>
    <p>Area Of Spacification</p>
    <div class="faculty-icons">
      <a href=""><i>Phone</i></a>
      <a href=""><i>email</i></a>
      <a href=""><i>personal</i></a>
      <a href=""><i>ACOE</i></a>
    </div>
  </div>
  <div class="faculty-items_container">
    <p class="faculty-item">Qualification1</p>
    <p class="faculty-item">Qualification</p>
    <p class="faculty-item">Qualification</p>
    <p class="faculty-item">Qualification</p>
    <p class="faculty-item">Qualification</p>
    <p class="faculty-item">Qualification</p>
    <p class="faculty-item">Qualification</p>
    <p class="faculty-item">Qualification</p>
    <p class="faculty-item">Qualification</p>
    <p class="faculty-item">Qualification</p>
    <p class="faculty-item">Qualification</p>
    <p class="faculty-item">Qualification</p>
    <p class="faculty-item">Qualification</p>
    <p class="faculty-item">Qualification</p>
  </div>
  <div class="faculty-disp">
    <li>Hello</li>
    <li>how re you</li>
    <li></li>
    <li></li>
  </div>
</body><script src="./Js/faculty.js" crossorigin="anonymous"></script>
</html>