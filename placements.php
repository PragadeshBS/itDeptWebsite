<?php require("templates/header.php"); ?>

  <div class="body-start intro-v2 curriculum-bg">
    <div class="intro-v2-content">
      <h1>Placements</h1>
      <p>Some nice text that states that we got good placement stats and opportunities.</p>
    </div>
  </div>

  <h2 style="color: black;padding-inline: 1em;text-align: center;">
  Previous Year's Placements</h2>  
  <canvas id="myChart2" class="placement-bar"></canvas>
  <br><p style="text-align:center; color: #ab3c35; font-size: 1.2rem">Academic Year (Number of Students Registered)</p>
  <br><br>
  <h2 style="color: black;padding-inline: 1em;text-align: center;">
  Higher Studies</h2>
  <div class="students-input">
    <input type="radio" name="higher" style="display:none;" id="y1819" checked>
    <input type="radio" name="higher" style="display:none;" id="y1718">
    <input type="radio" name="higher" style="display:none;" id="y1617">
    <input type="radio" name="higher" style="display:none;" id="y1516">
    <input type="radio" name="higher" style="display:none;" id="y1415">            
    <label class="students-input-element" for="y1819">2018 - 2019</label>
    <label class="students-input-element" for="y1718">2017 - 2018</label>
    <label class="students-input-element" for="y1617">2016 - 2017</label>
    <label class="students-input-element" for="y1516">2015 - 2016</label>
    <label class="students-input-element" for="y1415">2014 - 2015</label>
  </div>

  <div class="highers-container" id="higherstats-display"></div>
  <br><br>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="./Js/placements-bar.js"></script>
<?php require("templates/footer.php"); ?>
