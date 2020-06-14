
<html>
    <head>
        <meta charset="utf-8">
        <title>Onyang</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/style/style.css">
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header">
            <?php
                include "database/db.php";

                $imgs=mysqli_query($con,"SELECT * FROM tbl_images where img_place='header_place'");
                $icount=0;
                while($img=mysqli_fetch_array($imgs)){
                    $icount++;
                    echo "<img class='img".$icount."' src='".$img['img_src']."'>";
                }
                $personal=mysqli_query($con,"SELECT * FROM tbl_personalinfo");
                while($pi=mysqli_fetch_array($personal)){
                    echo "<p class='name1'>".$pi['user_name']."</p>";
                    echo "<p class='name2'>".$pi['user_name']."</p>";
                }
            ?>
        </div>
        <div class="personalInfo">
            <p class="piHeader">Profile</p>
            <p>Creative Thinking Inspires Idea</p>
            <div class="left">
                <p class="pi2ndHeader">Info</p>
                <?php
                    include "database/db.php";
                    $personal=mysqli_query($con,"SELECT * FROM tbl_personalinfo");
                    while($pi=mysqli_fetch_array($personal)){
                        echo "<p><b>Name: </b>".$pi['user_name']."</p>";
                        echo "<p><b>Birth Date: </b>".$pi['user_birthdate']."</p>";
                        echo "<p><b>Age: </b>22</p>";
                        echo "<p><b>Birth Place: </b>".$pi['user_birthplace']."</p>";
                        echo "<p><b>Gender: </b>".$pi['user_gender']."</p>";
                        echo "<p><b>Address: </b>".$pi['user_address']."</p>";
                        echo "<p><b>Email: </b>".$pi['user_email']."</p>";
                        echo "<p><b>Phone Number: </b>".$pi['user_phoneNumber']."</p>";
                        echo "<p><b>Height: </b>".$pi['user_height']."</p>";
                        echo "<p><b>Weight: </b>".$pi['user_weight']."</p>";
                    }
                ?>
            </div>
            <div class="right">
                <p class="pi2ndHeader">About Me</p>
                <p class="desc">I'm Ana Katrina Bon Ramos. I am from Philippines and 22 years old. I am a computer programming student at Central Colleges of the Philippines. Coming to my soul's interest: I would like to listen to music and also to watch fiction tales like The Little Mermaid and Snow-White. Drawing is my passion. I am fond of drawing because it helps me forget about all my tension and it fills me with exciting questions. Like when I am looking at an eagle and drawing it's wings, different questions come in my mind like why are its wings so big and curved upwards at the edge. It helps me to enhance my creativity and use my imagination in anyway I like without any restrictions. But above all the most important reason is that it makes me happy and I am not an expert artist but I will surely wanna be the one if I'll get a chance. Till then, I am improving my current skill level.

The best thing about your life is when you choose your passion as your career. But not everyone gets this opportunity. If you are one of them, then it's not the time to be sad. Don't let your passion fails.</p>
            </div>
            <?php
                include "database/db.php";
                $imgs=mysqli_query($con,"SELECT * FROM tbl_images where img_place='personal_info'");
                $icount=0;
                while($img=mysqli_fetch_array($imgs)){
                    $icount++;
                    echo "<img class='img".$icount."' src='".$img['img_src']."'>";
                }
            ?>
        </div>
        <div class="favorites">
            <div class="card" style="width: 18rem; display:inline-block">
            <img src="assets/img/personal_img/gallery1.jpg" class="card-img-top" alt="..." style="clip: rect(0px,60px,200px,0px);">
            <div class="card-body" >
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            <div class="card" style="width: 18rem; display:inline-block">
            <img src="assets/img/personal_img/gallery2.jpg" class="card-img-top" alt="...">
            <div class="card-body" >
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            <div class="card" style="width: 18rem; display:inline-block">
            <img src="assets/img/personal_img/gallery1.jpg" class="card-img-top" alt="...">
            <div class="card-body" >
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
        </div>
    </body>
</html>