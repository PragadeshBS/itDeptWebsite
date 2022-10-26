<?php require("templates/header.php"); ?>
<div class="body-start pt-3">
    <div class="row justify-content-center my-3">
        <div class="col-4">
            <img src="images/students/students-strength.png" alt="">
        </div>
        <div class="col-1"></div>
        <div class="col-4">
            <img src="images/students/success-rate.png" alt="">
        </div>
    </div>
</div>
<div>
    <div class="container">
        <div>
            <h1>Students</h1>
            <p>
                The computational needs of the researchers and engineers are met
                through well equipped laboratories. The resources in the department
                are continually updated with the changing industrial trends. The
                Advanced computing facility has been provided with the latest
                dual-core processors from Intel.
            </p>
        </div>
    </div>
    <div class="students-input container my-3">
        <input type="radio" name="degree" style="display: none" id="ug" checked />
        <input type="radio" name="degree" style="display: none" id="pg" />
        <label class="students-input-element" for="ug">Under Graduate</label>
        <label class="students-input-element" for="pg">Post Graduate</label>
        <h2 style="color: #ab3c35; padding-inline: 1em">Year :</h2>
        <select class="students-input-element" name="year" id="year"></select>
    </div>
    <div class="display-container my-3" id="students-display">
        <span class="students-item">
            <span>S.No</span>
            <i>Register Number</i>
            <p>Student Name</p>
        </span>
        <span class="students-item">
            <span>1</span>
            <i></i>
            <p></p>
        </span>
    </div>
</div>
<script src="./Js/students.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<?php require("templates/footer.php"); ?>