<?php require("templates/header.php"); ?>
<div class="body-start"></div>
<?php 
  $jsonData = file_get_contents("./JSON/faculty/teaching.json");
  $data = json_decode($jsonData, true);

  $jsonData = file_get_contents("./JSON/faculty/formerStaff.json");
  $formerStaffData = json_decode($jsonData, true);
  ?>
<div class="mx-3">
    <div class="container my-3 mt-5">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active fs-5" onclick="changeTab(0)" aria-current="page" href="#" id="ts-toggle">
                    Teaching Staff
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-5" href="#" onclick="changeTab(1)" id="nts-toggle">
                    Non Teaching Staff
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-5" href="#" onclick="changeTab(2)" id="ff-toggle">
                    Former Staff
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-5" href="#" onclick="changeTab(3)" id="fhod-toggle">
                    Former HOD
                </a>
            </li>
        </ul>
    </div>
    <div id="teaching-staff-content" class="container">
        <h3 class=" mt-3">Teaching Staff</h3>
        <div class="teaching-staff-wrapper row justify-content-center" id="teaching-display">
            <div class="col-3"></div>
            <?php
        echo "<div class='teaching-staff-item text-center col-4 p-3 m-1' onclick='displayStaff(0)'>
          <img src="."./Images/teachingStaff/".$data[0]['img']." alt='' class='fac-img img-fluid' />
          <div>".$data[0]['name']."</div>
          <i>".$data[0]['designation']."</i>
          <div><a href='tel:'>".$data[0]['mobile']."</a></div>
          <div>".$data[0]['email']."</div>
        </div>
        <div class='col-3'></div>
        ";
        for ($i=1; $i <= 2; $i++) {
            echo "<div class='teaching-staff-item text-center col-4 p-3 m-4' onclick='displayStaff(".$i.")'>
              <img src="."./Images/teachingStaff/".$data[$i]['img']." alt='' class='fac-img img-fluid' />
              <div>".$data[$i]['name']."</div>
              <i>".$data[$i]['designation']."</i>
              <div><a href='tel:'>".$data[$i]['mobile']."</a></div>
              <div>".$data[$i]['email']."</div>
            </div>";
          }
          for ($i=3; $i <= 4; $i++) {
            echo "<div class='teaching-staff-item text-center col-4 p-3 m-4' onclick='displayStaff(".$i.")'>
              <img src="."./Images/teachingStaff/".$data[$i]['img']." alt='' class='fac-img img-fluid' />
              <div>".$data[$i]['name']."</div>
              <i>".$data[$i]['designation']."</i>
              <div><a href='tel:'>".$data[$i]['mobile']."</a></div>
              <div>".$data[$i]['email']."</div>
            </div>";
          }
          for ($i=5; $i < count($data); $i++) {
            echo "<div class='teaching-staff-item text-center col-3 p-3 m-4' onclick='displayStaff(".$i.")'>
              <img src="."./Images/teachingStaff/".$data[$i]['img']." alt='' class='fac-img img-fluid' />
              <div>".$data[$i]['name']."</div>
              <i>".$data[$i]['designation']."</i>
              <div><a href='tel:'>".$data[$i]['mobile']."</a></div>
              <div>".$data[$i]['email']."</div>
            </div>";
          }
    ?>
        </div>
    </div>
</div>


<?php
  for ($i=0; $i < count($data); $i++) {
    echo "
    <div id='modal-".$i."' class='modal'>
      <div class='modal-content'>
        <span class='close'>&times;</span>
        <div class='staff-modal'>
          <div class='left'>
            <div><img src='./Images/teachingStaff/".$data[$i]['img']."' alt='Staff image' class='fac-detail-img img-fluid' /></div>
            <div><a target='_blank' href='".$data[$i]['externalLink']."'><button class='btn btn-primary mx-auto d-block'>Profile</button></a></div>
          </div>
          <div class='right'>
            <table class='staffTable'>
              <tbody>
                <tr>
                  <td>Name</td>
                  <td>".$data[$i]['name']."</td>                
                </tr>
                <tr>
                  <td>Designation</td>
                  <td>".$data[$i]['designation']."</td>
                </tr>
                <tr>
                  <td>Area Of Expertise</td>
                  <td>".$data[$i]['areaOfExpertise']."</td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>".$data[$i]['email']."</td>
                </tr>
                <tr>
                  <td>Phone Number</td>
                  <td>".$data[$i]['mobile']."</td>
                </tr>
                <tr>
                  <td>Orcid Id</td>
                  <td>".$data[$i]['orcidId']."</td>
                </tr>
                <tr>
                  <td>Scopus Id</td>
                  <td>".$data[$i]['ScopusId']."</td>
                </tr>
                <tr>
                  <td>Researcher Id</td>
                  <td>".$data[$i]['ResearcherId']."</td>
                </tr>
                <tr>
                  <td>Google Scholar Id</td>
                  <td>".$data[$i]['GoogleScholarID']."</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    ";
  }
?>

<style>
button {
    background-color: var(--forestGreen);
    border: 0;
    border-radius: 10px;
    color: white;
    padding: 0.75rem 1rem;
    font-size: 1.2rem;
    margin-top: 2rem;
    cursor: pointer;
}

table {
    border-collapse: collapse;
    width: 100%;
}

td,
th {
    border: 0px;
    text-align: justify;
    padding: 8px;
}

td:nth-child(odd) {
    padding-right: 100px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

.staff-modal {
    display: flex;
    justify-content: space-evenly;
}

.left {
    display: flex;
    flex-direction: column;
}

/* The Modal (background) */
.modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 9999999;
    /* Sit on top */
    padding-top: 100px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.teaching-staff-item {
    /* background: rgb(255, 255, 255); */
    /* background: radial-gradient(circle, rgba(255, 255, 255, 1) 0%, rgba(255, 240, 240, 1) 100%); */
    cursor: pointer;
    border-radius: 10px;
    background-color: #BCCEF8;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
}

.fac-img {
    height: 200px;
}

.fac-detail-img {
    max-width: 350px;
    margin-right: 2rem;
}
</style>

<script>
let activeModal = -1;
const displayStaff = (id) => {
    const modal = document.getElementById("modal-" + id);
    modal.style.display = "block";
    activeModal = parseInt(id);
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    let target = event.target.className;
    if (target === "close" || target.indexOf('modal') !== -1) {
        document.getElementById("modal-" + activeModal).style.display = "none";
        activeModal = -1;
    }
}
const changeTab = (tabNo) => {
    const teachingStaff = $("#teaching-staff-content"),
        nonTeachingStaff = $("#non-teaching-staff-content"),
        formerFaculty = $("#former-staff-content"),
        formerHod = $("#former-hod-content");
    tsToggle = $("#ts-toggle"),
        ntsToggle = $("#nts-toggle"),
        ffToggle = $("#ff-toggle"),
        fhodToggle = $("#fhod-toggle")
    let contents = [teachingStaff, nonTeachingStaff, formerFaculty],
        toggles = [tsToggle, ntsToggle, ffToggle, fhodToggle];
    contents.forEach(content => content.hide());
    toggles.forEach(toggle => toggle.removeClass("active"));
    if (tabNo === 0) {
        teachingStaff.show();
        tsToggle.addClass("active");
    } else if (tabNo === 1) {
        nonTeachingStaff.show();
        ntsToggle.addClass("active");
    } else if (tabNo === 2) {
        formerFaculty.show();
        ffToggle.addClass("active");
    } else if (tabNo === 3) {
        formerHod.show();
        fhodToggle.addClass("active");
    }
}
</script>


<div class="container" id="non-teaching-staff-content" style="display: none;">
    <h3 class="mt-3">Technical Staff</h3>
    <div>
        <div class="row justify-content-center">
            <div class="col-4 p-3 faculties-item_2">
                <img src="./Images/faculty/kanan.jpeg" alt="" />
                <h3>Mr. V. Kannan</h3>
                <p>Professional Assistant - I</p>
                <p>
                    <span class="fs-6"><strong>Responsibilities</strong><br></span>
                    Conference Website Maintanence, System Maintanence, Server Maintanence
                </p>
                <ul>
                    <span class="fs-6"><strong>Qualification<br></strong></span>
                    <li>
                        Diploma in IT - Valivalam Desikar Polytechnic College Nagapattinam
                    </li>
                    <li>B.E (CSE) - Anna University, MIT Campus</li>
                </ul>
            </div>
            <div class="col-4 faculties-item_2">
                <img src="./Images/faculty/Saravanan.jpeg" alt="" />
                <h3>Mr. V. Saravanan</h3>
                <p>Professional Assistant - II</p>
                <p>
                    <span class="fs-6"><strong>Responsibilities<br></strong></span>
                    Server Maintanence, System Troubleshooting, Lab Maintanence
                </p>
                <ul>
                    <span class="fs-6"><strong>Qualification<br></strong></span>
                    <li>
                        Diploma in Electrical and Electronics Engineering - Sri Ram Polytechnic,
                        Vepampattu
                    </li>
                    <li>Bachelor of Computer Application - Madurai Kamarajar University</li>
                    <li>Master of Computer Application - Anna University CEG Campus</li>
                </ul>
            </div>
            <div class="col-4 faculties-item_2">
                <img src="./Images/faculty/Senbagam.jpeg" />
                <h3>Ms. G. Senbagam</h3>
                <p>Professional Assistant - II</p>
                <p>
                    <span class="fs-6"><strong>Responsibilities<br></strong></span>
                    System Troubleshooting, Lab Maintanence
                </p>
                <ul>
                    <span class="fs-6"><strong>Qualification<br></strong></span>
                    <li>B.Sc Computer Science - Indo American College</li>
                    <li>B.Ed Computer Science - Saratha College of Education</li>
                    <li>
                        Master of Computer Application - Quaid-E-Millath Government College for
                        Women
                    </li>
                </ul>
            </div>
        </div>
        <div class="row my-3 justify-content-center">
            <div class="col-4 faculties-item_2">
                <img src="./Images/faculty/kalpana.jpeg" alt="" />
                <h3>Ms. S. Kalpana</h3>
                <p>Professional Assistant - I</p>
                <p>
                    <span class="fs-6"><strong>Responsibilities<br></strong></span>
                    Maintain hardware and software issues for all systems in Labs.
                    Troubleshoot the hardware and peripherals when needed.
                </p>
                <ul>
                    <span class="fs-6"><strong>Qualification<br></strong></span>
                    <li>B.E (C.S.E) - Rajalakshmi Engineering College, Thandalam.</li>
                </ul>
            </div>
            <div class="col-4 faculties-item_2">
                <img src="./Images/faculty/Babu.jpeg" alt="" />
                <h3>Mr. J. Babu</h3>
                <p>Professional Assistant - I</p>
                <p>
                    <span class="fs-6"><strong>Responsibilities<br></strong></span>
                    System Maintenance, Software Installation and upgradation, Server
                    Maintenance
                </p>
                <ul>
                    <span class="fs-6"><strong>Qualification<br></strong></span>
                    <li>BE(CSE) Pallavan college of Engineering, Kanchipuram</li>
                </ul>
            </div>
        </div>
        <h1>Non Technical Staff</h1>
        <ul>
            <li>Mrs. M. Eswari - M.S.G.C</li>
            <li>Mr. A. Augustin - Professional Assistant - II</li>
            <li>Mr. R. Sandiappan - Peon</li>
            <li>Mrs. Umarani .A - Assistant</li>
            <li>Ms. Kalaiselvi .K - Clerical Assistant</li>
            <li>Mr. Nallathambi .K - Peon</li>
        </ul>
    </div>
</div>


<div id="former-staff-content" class="container" style="display: none">
    <h3 class=" mt-3">Former Staff</h3>
    <div class="teaching-staff-wrapper row justify-content-center" id="teaching-display">
        <?php        
          for ($i=0; $i < count($formerStaffData); $i++) {
            echo "<div class='teaching-staff-item text-center col-3 p-3 m-4'>
              <img src="."./Images/formerStaff/".$formerStaffData[$i]['img']." alt='' class='fac-img img-fluid' />
              <div>".$formerStaffData[$i]['name']."</div>
              <i>".$formerStaffData[$i]['designation']."</i>
              <div><a href='tel:'>".$formerStaffData[$i]['mobile']."</a></div>
              <div>".$formerStaffData[$i]['email']."</div>
            </div>";
          }
    ?>
    </div>
</div>

<div id="former-hod-content" class="container" style="display: none">
    <h3 class=" mt-3">Former HOD</h3>
    <div class="teaching-staff-wrapper row justify-content-center" id="teaching-display">
        <div class='teaching-staff-item text-center col-3 p-3 m-4'>
            <img src='./Images/formerStaff/hod.jpg' alt='' class='fac-img img-fluid' />
            <div>Dr.B.Vinayagasundaram</div>
            <i>Former HOD | Assosciate Professor</i>
            <div>bvsundaram@annauniv.edu</div>
        </div>
    </div>
</div>
<!-- <script src="./Js/faculties.js"></script> -->

<?php require("templates/footer.php"); ?>