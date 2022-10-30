<?php require("templates/header.php"); ?>
<div class="body-start"></div>
<h1 class="pt-3">Teaching Staff</h1>
<?php 
  $jsonData = file_get_contents("./JSON/faculty/teaching.json");
  $data = json_decode($jsonData, true);
?>
<div class="container">
    <div class="teaching-staff-wrapper row justify-content-center" id="teaching-display">
        <div class="col-3"></div>
        <?php
        echo "<div class='teaching-staff-item text-center col-4 p-3 m-1' onclick='displayStaff(0)'>
          <img src="."images/teachingStaff/".$data[0]['img']." alt='' class='fac-img img-fluid' />
          <div>".$data[0]['name']."</div>
          <i>".$data[0]['designation']."</i>
          <div><a href='tel:'>".$data[0]['mobile']."</a></div>
          <div>".$data[0]['email']."</div>
        </div>
        <div class='col-3'></div>
        ";
          for ($i=1; $i < count($data); $i++) {
            echo "<div class='teaching-staff-item text-center col-3 p-3 m-1' onclick='displayStaff(".$i.")'>
              <img src="."images/teachingStaff/".$data[$i]['img']." alt='' class='fac-img img-fluid' />
              <div>".$data[$i]['name']."</div>
              <i>".$data[$i]['designation']."</i>
              <div><a href='tel:'>".$data[$i]['mobile']."</a></div>
              <div>".$data[$i]['email']."</div>
            </div>";
          }
    ?>
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
            <div><img src='images/teachingStaff/".$data[$i]['img']."' alt='Staff image' class='fac-detail-img img-fluid' /></div>
            <div><a href='https://google.com'><button>Profile</button></a></div>
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
    background: rgb(255, 255, 255);
    background: radial-gradient(circle, rgba(255, 255, 255, 1) 0%, rgba(255, 240, 240, 1) 100%);
    cursor: pointer;
    border-radius: 10px;
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
</script>


<div class="container">
    <h1>Technical Staff</h1>
    <div>
        <div class="row">
            <div class="col-4 p-3 faculties-item_2">
                <img src="./Images/faculty/noImage.jpeg" alt="" />
                <h3>Mr.V.Kannan</h3>
                <p>Professional Assistant - I</p>
                <p>
                    Conference Website Maintanence, System Maintanence, Server Maintanence
                </p>
                <ul>
                    <li>
                        Diploma in IT - Valivalam Desikar Polytechnic College Nagapattinam
                    </li>
                    <li>B.E (CSE) - Anna University, MIT Campus</li>
                </ul>
            </div>
            <div class="col-4 faculties-item_2">
                <img src="./Images/faculty/noImage.jpeg" alt="" />
                <h3>Mr.V.Saravanan</h3>
                <p>Professional Assistant - II</p>
                <p>Server Maintanence, System Troubleshooting, Lab Maintanence</p>
                <ul>
                    <li>
                        Diploma in Electrical and Electronics Engineering - Sri Ram Polytechnic,
                        Vepampattu
                    </li>
                    <li>Bachelor of Computer Application - Madurai Kamarajar University</li>
                    <li>Master of Computer Application - Anna University CEG Campus</li>
                </ul>
            </div>
            <div class="col-4 faculties-item_2">
                <img src="./Images/faculty/noImage.jpeg" alt="" />
                <h3>Ms.G.Senbagam</h3>
                <p>Professional Assistant - II</p>
                <p>System Troubleshooting, Lab Maintanence</p>
                <ul>
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
                <img src="./Images/faculty/noImage.jpeg" alt="" />
                <h3>Ms.S.Kalpana</h3>
                <p>Professional Assistant - I</p>
                <p>
                    Maintain hardware and software issues for all systems in Labs.
                    Troubleshoot the hardware and peripherals when needed.
                </p>
                <ul>
                    <li>B.E (C.S.E) - Rajalakshmi Engineering College, Thandalam.</li>
                </ul>
            </div>
            <div class="col-4 faculties-item_2">
                <img src="./Images/faculty/noImage.jpeg" alt="" />
                <h3>Mr.J.Babu</h3>
                <p>Professional Assistant - I</p>
                <p>
                    System Maintenance, Software Installation and upgradation, Server
                    Maintenance
                </p>
                <ul>
                    <li>BE(CSE) Pallavan college of Engineering, Kanchipuram</li>
                </ul>
            </div>
        </div>
        <h1>Non Technical Staff</h1>
        <ul>
            <li>Mrs.M.Eswari - M.S.G.C</li>
            <li>Mr.A.Augustin - Professional Assistant - II</li>
            <li>Mr.R.Sandiappan - Peon</li>
            <li>Mrs.Umarani.A - Assistant</li>
            <li>Ms.Kalaiselvi.K - Clerical Assistant</li>
            <li>Mr.Nallathambi.K - Peon</li>
        </ul>
    </div>
</div>
<!-- <script
src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous"
></script> -->
<!-- <script src="./Js/faculties.js"></script> -->

<?php require("templates/footer.php"); ?>