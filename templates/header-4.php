<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./Images/annaUniv.svg">
    <title>Department of Information Technology | MIT Campus, Anna University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap"rel="stylesheet'>
    <link rel="stylesheet" href="./CSS/patent.css">
    <link rel="stylesheet" href="./CSS/navigator.css">
    <link rel="stylesheet" href="./CSS/studentAwards.css">
    <link rel="stylesheet" href="./CSS/phd.css">    
    <link rel="stylesheet" href="./CSS/facultyAchivements.css">
    <link rel="stylesheet" href="./CSS/header.css">
    <link rel="stylesheet" href="./CSS/books.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans">
</head>

<body>
    <!-- Image and text -->

    <header>

        <img src="./Images/annaUniv.svg" alt="">
        <div class="heading">
            <div class="heading-title">Department of Information Technology</div>
            <div class="heading-dept">Anna University , MIT Campus</div>
        </div>
        <input type="checkbox" style="display:none" id="nav-toggle" class="nav-toggle">

        <!-- <nav>
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
        </label> -->

    </header>
    <div class="navigation">
        <nav>
            <label for="drop" class="toggle">&#8801; Menu</label>
            <input type="checkbox" id="drop" />
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li> 
                <!-- First Tier Drop Down -->
                <label for="drop-1" class="toggle">Service +</label>
                <a href="#">Service</a>
                <input type="checkbox" id="drop-1"/>
                <ul>
                    <li><a href="#">Service 1</a></li>
                    <li><a href="#">Service 2</a></li>
                    <li><a href="#">Service 3</a></li>
                </ul>
                </li>
                <li> 
                
                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle">Portfolio +</label>
                <a href="#">Portfolio</a>
                <input type="checkbox" id="drop-2"/>
                <ul>
                    <li><a href="#">Portfolio 1</a></li>
                    <li><a href="#">Portfolio 2</a></li>
                    <li> 
                    
                    <!-- Second Tier Drop Down -->
                    <label for="drop-3" class="toggle">Works +</label>
                    <a href="#">Works</a>
                    <input type="checkbox" id="drop-3"/>
                    <ul class="drop">
                        <li><a href="#">HTML/CSS</a></li>
                        <li><a href="#">jQuery</a></li>
                        <li><a href="#">Python</a></li>
                    </ul>
                    </li>
                </ul>
                </li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Submit</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About</a></li>
            </ul>
            </nav>
    </div>    
    
    <script>
        /*
    $(function() {
        // ------------------------------------------------------- //
        // Multi Level dropdowns
        // ------------------------------------------------------ //
        $("li.dropdown [data-toggle='dropdown'] ").on("mouseover",
            function(event) {
                event.preventDefault();
                event.stopPropagation();

                $(this).siblings().toggleClass("show");


                if (!$(this).next().hasClass('show')) {
                    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
                }
                $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                    $('.dropdown-submenu .show').removeClass("show");
                });

        });
        $("li.dropdown [data-toggle='dropdown'] ").on("mouseout",
            function(event) {
                event.preventDefault();
                event.stopPropagation();
                if (!$(this).next().hasClass('show')) {
                    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
                }
                $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                    $('.dropdown-submenu .show').removeClass("show");
                });
                console.log("hello"+this);

        });



    });*/

    // $(".dropdown-toggle").on("mouseenter", function() {
    //     // make sure it is not shown:
    //     if (!$(this).parent().hasClass("show")) {
    //         $(this).click();
    //     }
    // });
    </script>