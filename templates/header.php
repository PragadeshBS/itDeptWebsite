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
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap"rel="stylesheet'>
    <link rel="stylesheet" href="./CSS/patent.css">

    
    <link rel="stylesheet" href="./CSS/navigator.css">
    <link rel="stylesheet" href="./CSS/navigatorMedia.css">
    <link rel="stylesheet" href="./CSS/studentAwards.css">
    <link rel="stylesheet" href="./CSS/phd.css">    
    <link rel="stylesheet" href="./CSS/facultyAchivements.css">
    
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
            <div class="parent">
                <div>Research & Devolepment <i class="bi bi-caret-down-fill"></i></div> 
                <div class="child-1">                        
                    <a href=""class="child-1-parent">
                        Faculty & Teaching Staff <i class="bi bi-caret-down-fill"></i>
                        <div class="child-2">                                
                            <a href="">Hello</a>
                        </div>
                    </a>
                    <a href="./faculties.php">
                        <i class="bi bi-people-fill"></i>
                        Faculty
                    </a>
                    <a href="./faculties.php">
                        <i class="bi bi-people-fill"></i>
                        Faculty
                    </a>
                </div>
                
            </div>
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
    <!--
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container-fluid">
            <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars"
                aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" style="margin-top:0;color:black;">
                  <i class="bi bi-list"></i>
            </button>


            <div id="navbarContent" class="collapse navbar-collapse">
                <ul class="navbar-nav">

                    <li class="nav-item"><a href="./">
                            <i class="bi bi-house-door-fill"></i>
                            Home
                        </a></li>
                    <li class="nav-item"><a href="./vision-mission.php">
                            <i class="bi bi-person"></i>
                            Vision &amp; Mission
                        </a></li>
                    <li class="nav-item">
                        <a href="./hodDesk.php">
                            <i class="bi bi-person-rolodex"></i>
                            HOD's Desk
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            class="nav-link dropdown-toggle"><i class="bi bi-people-fill"></i>
                            People <i class="bi bi-caret-down-fill"></i></a>
                        <ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-1 shadow">
                            <li><a href="./faculties.php" class="dropdown-item">Teaching  Staff </a></li>
                            <li><a href="./facultiesTech.php" class="dropdown-item">Technical & Administrative Staff </a></li>

                            <li class="dropdown-divider"></li>

                            <li class="dropdown-submenu">
                                <a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" class="dropdown-item dropdown-toggle">Students <i
                                        class="bi bi-caret-down-fill"></i></a>
                                <ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-2 shadow">
                                    <li>
                                        <a tabindex="-1" href="./scholars.php" class="dropdown-item">Scholars</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="./students.php" class="dropdown-item">UG & PG</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </li>
                    <li class="nav-item"><a href="./infrastructure.php">
                            <i class="bi bi-building"></i>
                            Infrastructure</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="dropdownMenu1" href="./academics.php" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" class="nav-link dropdown-toggle"> <i
                                class="bi bi-file-earmark-richtext"></i>

                            Academics <i class="bi bi-caret-down-fill"></i></a>
                        <ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow">
                            <li><a href="./academics.php"  class="dropdown-item">Courses Offered</a></li>

                            
                            <li class="dropdown-submenu">
                                <a id="dropdownMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" class="dropdown-item dropdown-toggle">Regulations<i
                                        class="bi bi-caret-down-fill"></i></a>
                                <ul aria-labelledby="dropdownMenu3" class="dropdown-menu border-0 shadow">
                                    <li>
                                        <li class="dropdown-submenu">
                                            <a id="dropdownMenu5" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" class="dropdown-item dropdown-toggle">UG <i
                                                    class="bi bi-caret-down-fill"></i></a>
                                            <ul aria-labelledby="dropdownMenu5" class="dropdown-menu border-0 shadow">
                                                <li>
                                                    
                                                    <a tabindex="-1" href="https://cac.annauniv.edu/udregulations/00.%20UG%20Reg%202019.pdf" class="dropdown-item">R-2019</a>
                                                </li>
                                                <li>
                                                    <a tabindex="-1" href="https://cac.annauniv.edu/udregulations/00.%20UG%20Reg-2015%20(Final)%20-%2028.01.2019.pdf" class="dropdown-item">R-2015</a>
                                                </li>
                                                <li>
                                                    <a tabindex="-1" href="https://cac.annauniv.edu/udregulations/bebtech2013pt.pdf" class="dropdown-item">R-2013</a>
                                                </li>
                                            </ul>
                                        </li>                                        
                                    </li>                                    
                                    <li>
                                        <a tabindex="-1" href="https://cac.annauniv.edu/uddetails/udug_2019/AmmendII/FICE/B.Tech.AI&DS%20-%20I%20&%20II.pdf" class="dropdown-item">UG- AI & DS</a>
                                    </li>
                                    <li>
                                        <li>
                                            <li class="dropdown-submenu">
                                                <a id="dropdownMenu6" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" class="dropdown-item dropdown-toggle">PG<i
                                                        class="bi bi-caret-down-fill"></i></a>
                                                <ul aria-labelledby="dropdownMenu6" class="dropdown-menu border-0 shadow">
                                                    <li>
                                                        
                                                        <a tabindex="-1" href="https://cac.annauniv.edu/udregulations/01.%20PG%20Reg%20-%20R-2019.pdf" class="dropdown-item">R-2019</a>
                                                    </li>
                                                    <li>
                                                        <a tabindex="-1" href="https://cac.annauniv.edu/udregulations/01.%20PG%20Reg%20-%2001.09.17%20(WS)%20-%2028.01.2019.pdf" class="dropdown-item">R-2015</a>
                                                    </li>
                                                    <li>
                                                        <a tabindex="-1" href="https://cac.annauniv.edu/udregulations/R2013PG.pdf" class="dropdown-item">R-2013</a>
                                                    </li>
                                                </ul>
                                            </li>                                        
                                        </li>
                                    </li>
                                </ul>
                            </li> 
                            <li class="dropdown-submenu">
                                <a id="dropdownMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" class="dropdown-item dropdown-toggle">Curriculum and Syllabi<i
                                        class="bi bi-caret-down-fill"></i></a>
                                <ul aria-labelledby="dropdownMenu3" class="dropdown-menu border-0 shadow">
                                    <li>
                                        <li class="dropdown-submenu">
                                            <a id="dropdownMenu5" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" class="dropdown-item dropdown-toggle">UG-IT <i
                                                    class="bi bi-caret-down-fill"></i></a>
                                            <ul aria-labelledby="dropdownMenu5" class="dropdown-menu border-0 shadow">
                                                <li>
                                                    
                                                    <a tabindex="-1" href="https://cac.annauniv.edu/uddetails/udug_2019/AmmendII/FICE/B.Tech.%20IT.pdf" class="dropdown-item">R-2019</a>
                                                </li>
                                                <li>
                                                    <a tabindex="-1" href="https://cac.annauniv.edu/uddetails/udug_2015/18.IT%20final.pdf" class="dropdown-item">R-2015</a>
                                                </li>
                                                <li>
                                                    <a tabindex="-1" href="https://cac.annauniv.edu/uddetails/udug_2013pt/IT.pdf" class="dropdown-item">R-2013</a>
                                                </li>
                                            </ul>
                                        </li>                                        
                                    </li>                                    
                                    <li>
                                        <a tabindex="-1" href="https://cac.annauniv.edu/uddetails/udug_2019/AmmendII/FICE/B.Tech.AI&DS%20-%20I%20&%20II.pdf" class="dropdown-item">UG- AI & DS</a>
                                    </li>
                                    <li>
                                        <li>
                                            <li class="dropdown-submenu">
                                                <a id="dropdownMenu6" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" class="dropdown-item dropdown-toggle">PG-IT<i
                                                        class="bi bi-caret-down-fill"></i></a>
                                                <ul aria-labelledby="dropdownMenu6" class="dropdown-menu border-0 shadow">
                                                    <li>
                                                        
                                                        <a tabindex="-1" href="https://cac.annauniv.edu/uddetails/udpg_2019/ice/11.%20M.Tech%20IT.pdf" class="dropdown-item">R-2019</a>
                                                    </li>
                                                    <li>
                                                        <a tabindex="-1" href="https://cac.annauniv.edu/uddetails/udpg_2015/47.M.Tech%20IT-.pdf" class="dropdown-item">R-2015</a>
                                                    </li>
                                                    <li>
                                                        <a tabindex="-1" href="https://cac.annauniv.edu/uddetails/udpg_2013/11.%20IT%20%20-%20replace%20on%2020.01.15.pdf" class="dropdown-item">R-2013</a>
                                                    </li>
                                                </ul>
                                            </li>                                        
                                        </li>
                                    </li>
                                </ul>
                            </li>                      
                        </ul>

                    </li>
                    

                    <li class="nav-item dropdown">
                        <a id="dropdownMenu1" href="./research.php" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" class="nav-link dropdown-toggle"><i
                                class="bi bi-motherboard-fill"></i>
                            Research & Innovation <i class="bi bi-caret-down-fill"></i> </a>
                        <ul aria-labelledby="dropdownMenu6" class="dropdown-menu border-1 shadow">
                            <li><a href="./patent.php" class="dropdown-item">Patent </a></li>                          
                            <li><a href="./trustAreas.php" class="dropdown-item">Research Trust Areas</a></li>
                            <li><a href="./research.php" class="dropdown-item">Sponsored & CTDT projects </a></li>
                            <li><a href="./phd.php" class="dropdown-item">List of Scholars awarded Ph.D</a></li>                            
                            <li><a href="./books.php" class="dropdown-item">Books Published</a></li>                           


                        </ul>

                    </li>
                    <li class="nav-item dropdown">
                        <a id="dropdownMenu1" href="./activities.php" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" class="nav-link dropdown-toggle"> <i
                                class="bi bi-file-earmark-richtext"></i>

                            Activities <i class="bi bi-caret-down-fill"></i></a>
                        <ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow">


                            <li class="dropdown-submenu">
                                <a id="dropdownMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" class="dropdown-item dropdown-toggle">Student Activities<i
                                        class="bi bi-caret-down-fill"></i></a>
                                <ul aria-labelledby="dropdownMenu3" class="dropdown-menu border-0 shadow">
                                    <li>
                                        <a tabindex="-1" href="./studentAssociation.php" class="dropdown-item">Student Association</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="./studentProjects.php" class="dropdown-item">Student Projects</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="./studentsInterInstitute.php" class="dropdown-item">Inter-Institute Events</a>
                                    </li>
                                     <li>
                                        <a tabindex="-1" href="./placements.php" class="dropdown-item">Placements</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a id="dropdownMenu4" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" class="dropdown-item dropdown-toggle">Faculty Activities <i
                                        class="bi bi-caret-down-fill"></i></a>
                                <ul aria-labelledby="dropdownMenu4" class="dropdown-menu border-0 shadow">
                                    <li>
                                        <a tabindex="-1" href="./conferences.php" class="dropdown-item">Conferences Attended</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="./journals.php" class="dropdown-item">Journals Published</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="./fdp.php" class="dropdown-item">Faculty Development Program</a>
                                    </li>



                                </ul>
                            </li>
                        </ul>

                    </li>
                    <li class="nav-item dropdown">
                        <a id="dropdownMenu1" href="./activities.php" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" class="nav-link dropdown-toggle"> <i
                                class="bi bi-file-earmark-richtext"></i>

                            Awards <i class="bi bi-caret-down-fill"></i></a>
                        <ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow">


                           
                            <li><a href="./studentAchievements.php" class="dropdown-item">Student Achievements</a></li>
                            <li class="dropdown-submenu">
                                <a id="dropdownMenu4" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" class="dropdown-item dropdown-toggle">Faculty Achievements <i
                                        class="bi bi-caret-down-fill"></i></a>
                                <ul aria-labelledby="dropdownMenu4" class="dropdown-menu border-0 shadow">
                                    <li>
                                        <a tabindex="-1" href="./facultyAchievements.php" class="dropdown-item">Faculty Awards</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="./facultyForeign.php" class="dropdown-item">Foreign visit</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </li>


                    <li class="nav-item"><a href="./gallery.php">
                            <i class="bi bi-card-image"></i>
                            Gallery
                        </a></li>
                    <li class="nav-item"><a href="./e-service.php">
                            <i class="bi bi-pc-display-horizontal"></i>
                            E-Service
                        </a></li>
                    <li class="nav-item"><a href="#">
                            <i class="bi bi-pc-display-horizontal"></i>
                            360 Tour
                        </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
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



        });

        // $(".dropdown-toggle").on("mouseenter", function() {
        //     // make sure it is not shown:
        //     if (!$(this).parent().hasClass("show")) {
        //         $(this).click();
        //     }
        // });
    </script>-->