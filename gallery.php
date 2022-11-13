<?php require("./templates/header.php"); ?>
<div class="body-start intro-v2">
    <div class="container mt-5">
        <h1>Gallery</h1>
    </div>
    <div class="container row">
        <?php 
            for($i=1;$i<=2;$i++){
                echo "<div class='col-4 my-2'>
                    <img src='./Images/gallery/ac".$i.".jpg' class='img-fluid'>
                </div>";
            }
        ?>
        <?php 
            for($i=1;$i<=4;$i++){
                echo "<div class='col-4 my-3'>
                    <img src='./Images/gallery/da".$i.".jpg' class='img-fluid'>
                </div>";
            }
        ?>
        <?php 
            for($i=1;$i<=4;$i++){
                echo "<div class='col-4 my-3'>
                    <img src='./Images/gallery/hw".$i.".jpg' class='img-fluid'>
                </div>";
            }
        ?>
        <?php 
            for($i=0;$i<=5;$i++){
                echo "<div class='col-4 my-3'>
                    <img src='./Images/gallery/p".$i.".jpg' class='img-fluid'>
                </div>";
            }
        ?>
        <?php 
            for($i=1;$i<=4;$i++){
                echo "<div class='col-4 my-3'>
                    <img src='./Images/gallery/pl".$i.".jpg' class='img-fluid'>
                </div>";
            }
        ?>
        <?php 
            for($i=1;$i<=4;$i++){
                echo "<div class='col-4 my-3'>
                    <img src='./Images/gallery/sn".$i.".jpg' class='img-fluid'>
                </div>";
            }
        ?>
        <?php 
            for($i=1;$i<=15;$i++){
                echo "<div class='col-4 my-3'>
                    <img src='./Images/gallery/".$i.".png' class='img-fluid'>
                </div>";
            }
        ?>
    </div>
</div>
<?php require("./templates/footer.php"); ?>