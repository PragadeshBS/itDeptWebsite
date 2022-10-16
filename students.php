<?php require("templates/header.php"); ?>
    <div class="body-start intro-v2 students-bg">
      <div class="intro-v2-content">
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
    <div class="students-input">
      <input type="radio" name="degree" style="display: none" id="ug" checked />
      <input type="radio" name="degree" style="display: none" id="pg" />
      <label class="students-input-element" for="ug">Under Graduate</label>
      <label class="students-input-element" for="pg">Post Graduate</label>
      <h2 style="color: #ab3c35; padding-inline: 1em">Year :</h2>
      <select class="students-input-element" name="year" id="year"></select>
    </div>
    <div class="display-container" id="students-display">
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
  <script src="./Js/students.js"></script>
  <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
  ></script>
  <?php require("templates/footer.php"); ?>
