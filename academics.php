<?php require("templates/header.php"); ?>
<div class="container mt-5 pt-5">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active fs-5" aria-current="page" href="#">B.Tech IT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5" href="#">M.Tech IT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5" href="#">PhD</a>
        </li>
    </ul>
    <div class="my-3">
        <div class="btech-it">
            <h1>Program Educational Objectives</h1>
            <div class="container row align-items-start justify-content-center">
                <div class="col-6">
                    After completion of the B.Tech. (IT) course, students will be able to:
                    <ul>
                        <li>
                            PEO1. Demonstrate core competence in basic engineering and mathematics to design,
                            formulate, analyze, and solve hardware/software engineering problems.
                        </li>
                        <li>
                            PEO2. Have insight in fundamental areas of Information Technology and related
                            engineering with an inclination towards self-learning to address real-world problems
                            using digital and cognitive technologies.
                        </li>
                        <li>
                            PEO3. Collaborate with industry, academic and research institutions for product and
                            research related development.
                        </li>
                        <li>
                            PEO4. Imbibe high professionalism, effective communication skills and team spirit to
                            work on multidisciplinary projects, in diverse professional environments.
                        </li>
                        <li>PEO5. Practice IT solutions following technical standards with ethical values.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <img src="./Images/peo.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h1>Curriculum</h1>
    <div class="container">
        <div>
            <p>
                The Departments of Anna University follow a well-formulated curriculum
                that has been put together with the guidance and valuable feedback of
                our strong alumni network, awarded teachers and working professionals.
                This ensures that every student under the University acquires the
                necessary skills and knowledge.
            </p>
        </div>
        <div class="students-input my-3">
            <input type="radio" name="degree" style="display: none" id="ug" checked />
            <input type="radio" name="degree" style="display: none" id="pgf" />
            <input type="radio" name="degree" style="display: none" id="pgt" />
            <input type="radio" name="degree" style="display: none" id="research1" />
            <input type="radio" name="degree" style="display: none" id="research2" />
            <label class="students-input-element" for="ug">UG IT</label>
            <label class="students-input-element" for="ug-aids">UG AI &amp; DS</label>
            <label class="students-input-element" for="pgf">Post Graduate(Full Time)</label>
            <label class="students-input-element" for="pgt">Post Graduate(Part Time)</label>
            <label class="students-input-element" for="research1">Research(M.S)</label>
            <label class="students-input-element" for="research2">Research(PhD)</label>
        </div>
        <div class="students-input my-3">
            <h2 style="color: #ab3c35; padding-inline: 1em">Curriculum :</h2>
            <select class="students-input-element" name="year" id="year"></select>
        </div>
        <iframe class="my-3 display-container" style="height: 900px" id="curriculum-display" id="currDispPDF"></iframe>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="./Js/curriculum.js"></script>
<?php require("templates/footer.php"); ?>