<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./Images/annaUniv.svg">
    <title>Department of Information Technology | MIT Campus, Anna University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./CSS/navigator.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans">
</head>

<body>
    <header>
        <img src="./Images/annaUniv.svg" alt="">
        <div class="heading">
            <div class="heading-title">Department of Information Technology</div>
            <div class="heading-dept">Anna University , MIT Campus</div>
        </div>
        <input type="checkbox" style="display:none" id="nav-toggle" class="nav-toggle">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
  <div class="container">
    <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
              <span class="navbar-toggler-icon"></span>
          </button>


    <div id="navbarContent" class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <!-- Level one dropdown -->
        <li class="nav-item dropdown">
          <a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
          <ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow">
            <li><a href="#" class="dropdown-item">Some action </a></li>
            <li><a href="#" class="dropdown-item">Some other action</a></li>

            <li class="dropdown-divider"></li>

            <!-- Level two dropdown-->
            <li class="dropdown-submenu">
              <a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
              <ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
                <li>
                  <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                </li>

                <!-- Level three dropdown-->
                <li class="dropdown-submenu">
                  <a id="dropdownMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                  <ul aria-labelledby="dropdownMenu3" class="dropdown-menu border-0 shadow">
                    <li><a href="#" class="dropdown-item">3rd level</a></li>
                    <li><a href="#" class="dropdown-item">3rd level</a></li>
                  </ul>
                </li>
                <!-- End Level three -->

                <li><a href="#" class="dropdown-item">level 2</a></li>
                <li><a href="#" class="dropdown-item">level 2</a></li>
              </ul>
            </li>
            <!-- End Level two -->
          </ul>
        </li>
        <!-- End Level one -->

        <li class="nav-item"><a href="./">
                <i class="bi bi-house-door-fill"></i>
                Home
            </a></li>
        <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
        <nav>
            <a href="./">
                <i class="bi bi-house-door-fill"></i>
                Home
            </a>
            <a href="./vision-mission.php">
                <i class="bi bi-person"></i>
                Vision &amp; Mission
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
            <a href="./academics.php">
                <i class="bi bi-book-half"></i>
                Academics</a>
            <a href="./infrastructure.php">
                <i class="bi bi-building"></i>
                Infrastructure</a>
            <a href="./research.php">
                <i class="bi bi-motherboard-fill"></i>
                Research</a>
            <a href="./studentAssociation.php">
                <i class="bi bi-puzzle"></i>
                ITA
            </a>
            <a href="./placements.php">
                <i class="bi bi-person-check"></i>
                Placements
            </a>
            <a href="./activities.php">
                <i class="bi bi-file-earmark-richtext"></i>
                Activities
            </a>
            <a href="./gallery.php">
                <i class="bi bi-card-image"></i>
                Gallery
            </a>
            <a href="./e-service.php">
                <i class="bi bi-pc-display-horizontal"></i>
                E-Service
            </a>
        </nav>
        <label for="nav-toggle">
            <span></span><i class="bi bi-x-lg"></i>
        </label>
    </header>