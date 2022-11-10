<?php require("templates/header.php"); ?>
<!-- Content from here -->
<div class="intro-v2 about-us-bg ">
    <div class="home-content">
        <div class="announcements marquee">
            <div class="text-center mt-3">
                <p>
                    <a href="./academics.php">
                        New course: Artificial Intelligence & Data Science
                        <i class="bi bi-box-arrow-up-right external-link-icon"></i>
                    </a>
                </p>
            </div>
        </div>
        <p class="intro-v2-content">
            Keeping with the tradition of Anna University in offering new areas of specialization in engineering, the
            Department of Information Technology was instituted in the year 2001 with the objective of imparting
            knowledge in cutting-edge technologies in Information Technology and Computer Sciences.
            <br><br>
            The department is currently headed by Dr. Dhananjay Kumar, an educator and researcher himself. In the
            footsteps of the former Heads, the incumbent Head is further taking the department to reach newer heights.
            The department has a team of dynamic, young and dedicated staff, with specialization in wide array of areas.
            It offers full time and part time courses for both UG and PG. The department receives funds from DST under
            FIST programme.
            <br><br>All the members of TEAM IT share the belief that IT is a tool, if used effectively can improve the
            quality of all activities being carried out. As a first step, a project to automate all administrative
            activities has been taken up and the entire project is being done using the services of our department
            staffs. In the near future the department will have post Graduate course (other than MS By Research)
            offering curriculum in the field of Computer Science and Information Technology.
            <br><br>Department of Information Technology, MIT, thrives to accomplish its vision of developing dexterous
            and proficient students. Its progress is growing exponentially in contributing efficient and technically
            sound students to the corporate world.
            <br><br>
            “Imagination is more important than knowledge “ - Innovative ideas from student side are encouraged and
            support for implementation of the same offered by faculty members.
        </p>
    </div>
</div>
<div class="my-5 posters">
    <h3 class="container mb-3">Student projects</h3>
    <div class="row posters-content">
        <div class="col-1"><i id="prev-poster" class="bi bi-chevron-left display-3 ms-5"></i></div>
        <div class="col-10">
            <img id="poster-img" src="./Images/projects/1.png" class="d-block mx-auto poster-img">
        </div>
        <div class="col-1"><i id="next-poster" class="bi bi-chevron-right display-3 me-5"></i></div>
    </div>
</div>
<div class="my-3">
    <div class="container row">
        <div class="col-4">
            <p>Department of Information Technology</p>
            <p>
                Madras Institute of Technology, Anna University, Chromepet,
                Chennai-600044
            </p>
        </div>
        <div class="col-8">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7555.313370572543!2d80.143466210926!3d12.949412676797468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525fac595c29ff%3A0xb76082ae18b51418!2sMadras%20Institute%20of%20Technology%2C%20Anna%20University!5e0!3m2!1sen!2sin!4v1653134025025!5m2!1sen!2sin"
                id="google-map" loading="lazy"></iframe>
        </div>
    </div>
</div>
<style>
.marquee {
    white-space: nowrap;
    overflow: hidden;
    box-sizing: border-box;
}

.marquee p {
    display: inline-block;
    padding-left: 50%;
    animation: marquee 30s linear infinite;
}

.marquee a {
    text-decoration: none;
}

.marquee p:hover {
    animation-play-state: paused;
}

#google-map {
    width: 600px;
    height: 300px;
    margin-left: 100px;
}

@keyframes marquee {
    0% {
        transform: translate(0, 0);
    }

    100% {
        transform: translate(-100%, 0);
    }
}

.posters-content {
    align-items: center;
}

.poster-img {
    width: 800px;
}

#prev-poster,
#next-poster {
    cursor: pointer;
}
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
let activePoster = 1;
$("#prev-poster").click(() => {
    activePoster = Math.max(1, activePoster - 1);
    if (activePoster == 1) $("#prev-poster").hide();
    $("#next-poster").show()
    $("#poster-img").attr("src", `./Images/projects/${activePoster}.png`)
})
$("#next-poster").click(() => {
    activePoster = Math.min(12, activePoster + 1);
    if (activePoster == 12) $("#next-poster").hide();
    $("#prev-poster").show()
    $("#poster-img").attr("src", `./Images/projects/${activePoster}.png`)
})
$(document).ready(() => {
    $("#prev-poster").hide();
})
</script>
<?php require("templates/footer.php"); ?>