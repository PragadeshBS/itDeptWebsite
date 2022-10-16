<?php require("templates/header.php"); ?>
    <div class="body-start intro-v2 curriculum-bg">
      <div class="intro-v2-content">
        <h1>Curriculum</h1>
        <p>
          The Departments of Anna University follow a well-formulated curriculum
          that has been put together with the guidance and valuable feedback of
          our strong alumni network, awarded teachers and working professionals.
          This ensures that every student under the University acquires the
          necessary skills and knowledge.
        </p>
      </div>
    </div>
    <div class="students-input">
      <input type="radio" name="degree" style="display: none" id="ug" checked />
      <input type="radio" name="degree" style="display: none" id="pgf" />
      <input type="radio" name="degree" style="display: none" id="pgt" />
      <input type="radio" name="degree" style="display: none" id="research1" />
      <input type="radio" name="degree" style="display: none" id="research2" />
      <label class="students-input-element" for="ug">Under Graduate</label>
      <label class="students-input-element" for="pgf"
        >Post Graduate(Full Time)</label
      >
      <label class="students-input-element" for="pgt"
        >Post Graduate(Part Time)</label
      >
      <label class="students-input-element" for="research1"
        >Research(M.S)</label
      >
      <label class="students-input-element" for="research2"
        >Research(PhD)</label
      >
    </div>
    <div class="students-input">
      <h2 style="color: #ab3c35; padding-inline: 1em">Curriculum :</h2>
      <select class="students-input-element" name="year" id="year"></select>
    </div>
    <iframe
      class="display-container"
      style="height: 900px"
      id="curriculum-display"
      id="currDispPDF"
    ></iframe>
  <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
  ></script>
  <script src="./Js/curriculum.js"></script>
  <?php require("templates/footer.php"); ?>
