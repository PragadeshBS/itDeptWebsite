<?php require("./templates/header.php"); ?>
<div class="body-start">
    <div class="container">
        <div class="my-3">
            <h3>Best Paper Awards for Faculty Publications</h3>
            <div class="container"><?php require("./activitiesContent/bestPaperAwards.php"); ?></div>
        </div>
        <div class="my-3">
            <h3>Foreign Visit</h3>
            <div class="container"><?php require("./activitiesContent/foreignVisit.php"); ?></div>
        </div>
        <div class="my-3">
            <h3>Faculty Achievements</h3>
            <div class="container">
                <embed id="pdf-embed" class="w-100 d-block mx-auto" src="./PDF/activities/FacultyAchivements.pdf"
                    width="600px" height="500px" />
            </div>
        </div>
        <div class="my-3">
            <h3>Innovative Projects</h3>
            <div class="container"><?php require("./activitiesContent/innovative.php"); ?></div>
        </div>
        <div class="my-3">
            <h3>Participation in Invited lectures</h3>
            <div class="container">
                <embed id="pdf-embed" class="w-100 d-block mx-auto"
                    src="./PDF/activities/ParticipationInInvitedLectures.pdf" width="600px" height="500px" />
            </div>
        </div>
        <div class="my-3">
            <h3>FDP Attended 2019-20</h3>
            <div class="container">
                <embed id="pdf-embed" class="w-100 d-block mx-auto" src="./PDF/activities/FDPAttended19-20.pdf"
                    width="600px" height="500px" />
            </div>
        </div>
        <div class="my-3">
            <h3>FDP organized 2019-20</h3>
            <div class="container">
                <embed id="pdf-embed" class="w-100 d-block mx-auto" src="./PDF/activities/FDPOrg19-20.pdf" width="600px"
                    height="500px" />
            </div>
        </div>
        <div class="my-3">
            <h3>FDP Attended 2020-21</h3>
            <div class="container">
                <embed id="pdf-embed" class="w-100 d-block mx-auto" src="./PDF/activities/FDPAttended20-21.pdf"
                    width="600px" height="500px" />
            </div>
        </div>
        <div class="my-3">
            <h3>FDP organized 2020-21</h3>
            <div class="container">
                <div class="container"><?php require("./activitiesContent/fdpOrg20.php"); ?></div>
            </div>
        </div>
        <div class="my-3">
            <h3>FDP Attended 2021-22</h3>
            <div class="container">
                <embed id="pdf-embed" class="w-100 d-block mx-auto" src="./PDF/activities/FDPAttended21-22.pdf"
                    width="600px" height="500px" />
            </div>
        </div>
        <div class="my-3">
            <h3>FDP organized 2022</h3>
            <div class="container">
                <div class="container"><?php require("./activitiesContent/fdpOrg22.php"); ?></div>
            </div>
        </div>
        <div class="my-3">
            <h3>Conference 2019-20</h3>
            <div class="container">
                <embed id="pdf-embed" class="w-100 d-block mx-auto" src="./PDF/activities/Confrence19-20.pdf"
                    width="600px" height="500px" />
            </div>
        </div>
        <div class="my-3">
            <h3>Conference 2020-21</h3>
            <div class="container">
                <embed id="pdf-embed" class="w-100 d-block mx-auto" src="./PDF/activities/Confrence20-21.pdf"
                    width="600px" height="500px" />
            </div>
        </div>
        <div class="my-3">
            <h3>Conference 2021-22</h3>
            <div class="container">
                <embed id="pdf-embed" class="w-100 d-block mx-auto" src="./PDF/activities/Confrence21-22.pdf"
                    width="600px" height="500px" />
            </div>
        </div>
        <div class="my-3">
            <h3>Journals 2019-20</h3>
            <div class="container">
                <embed id="pdf-embed" class="w-100 d-block mx-auto" src="./PDF/activities/Journals19-20.pdf"
                    width="600px" height="500px" />
            </div>
        </div>
        <div class="my-3">
            <h3>Journals 2020-21</h3>
            <div class="container">
                <embed id="pdf-embed" class="w-100 d-block mx-auto" src="./PDF/activities/Journals20-21.pdf"
                    width="600px" height="500px" />
            </div>
        </div>
        <div class="my-3">
            <h3>Journals 2021-22</h3>
            <div class="container">
                <embed id="pdf-embed" class="w-100 d-block mx-auto" src="./PDF/activities/Journals21-22.pdf"
                    width="600px" height="500px" />
            </div>
        </div>
    </div>
</div>
<style>
thead {
    background-color: var(--primary);
}
</style>
<?php require("./templates/footer.php"); ?>