<?php require("templates/header.php"); ?>
<!-- Content from here -->
<div class="body-start"></div>
<div class="container">
    <div class="flex-container body-start">
        <!-- <div class="flex-item body-start hod-profile"> -->
        <div class="flex-item">
            <img src="" alt="hod-profile-image" />
            <h2><b>Dr. M R Sumalatha</b></h2>
            <p>Professor and Head<br>Department of Information Technology</p>
            <p>Madras Institute of Technology Campus</p>
            <p>Anna University, Chennai</p>
        </div>

        <!-- <div class="hod-about flex-item"> -->
        <div class="flex-item about-hod">
            Information technology, one of the fastest growing technologies, has become
            a strategic function in every organization and lands its foot in every walk
            of our life. The department of Information Technology established in the
            year 2000, offers under graduate and post graduate programmes in Information
            Technology, with the curriculum been devised and periodically being revised
            with the possibility of exploring different forms of knowledge through
            theoretical, practical and productive means as stated by the great
            philosopher Aristotle.
            <br /><br />
            The department considers the committed and dedicated faculty as its core
            strength in providing value education with professional standards to the
            enthusiastic and vibrant student community. Improved methods of teaching and
            learning process are adopted to achieve learning abilities through practice,
            exposure and motivation. Department has good infrastructural and computing
            facilities and provides a conducive environment to promote academic and
            research excellence in the department by successfully procuring and
            executing funded research projects.
            <br /><br />
            The department of Information Technology has received funding from the
            Department of Science and Technology under FIST (Fund for Improvement of
            Science and Technology) scheme for setting up wireless sensor network and
            cloud computing labs. The department has also received fund from
            UGC-DRS-SAP( Department Research Support for Special Assistance Programme)
            to carry out the research projects in Pervasive Computing.
            <br /><br />
            The department endeavors to continually improve, for standing ever competent
            in producing information technologists in the real sense, through committed
            and well defined function processes in the department.
        </div>
    </div>
</div>

<style>
.flex-container {
    display: flex;
    text-align: justify;
}

.flex-item:nth-of-type(1) {
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    border-radius: 10px;
    padding: 0.5rem;
    margin: 0 2rem 0 0;
}

.flex-item:nth-of-type(2) {
    padding: 0.5rem;
    box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
}

.flex-item {
    align-self: flex-start;
}

img {
    max-width: 20rem;
    margin: 0.2rem 1rem;
    border-radius: 8px;
}

@media only screen and (max-width: 768px) {
    .flex-container {
        flex-wrap: wrap;
        justify-content: center;
    }

    .flex-item:nth-of-type(1) {
        margin: 0 0 2rem 0;
    }
}
</style>
<?php require("templates/footer.php"); ?>