
<html>
    <head>
        <meta charset="utf-8">
        <title>A.K.R</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/style/style.css">
        <!-- JS, Popper.js, and jQuery -->
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="shortcut icon" href="http://localhost/AnaKatrina/assets/img/personal_img/personalInfo.jpg" type="image/x-icon" />
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
        <div class="places">
            <p class="piHeader">Travel</p>
            <div class="col-sm-4">
                <div id="travel1" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                        include "database/db.php";
                        $imgs=mysqli_query($con,"SELECT * FROM tbl_images where img_place='travel' and img_src like '%baguio%'");
                        $icount=0;
                        $icount2=0;
                        echo "<ol class='carousel-indicators'>";
                        
                        while($img=mysqli_fetch_array($imgs)){
                            $var="";
                            if($icount2==0)
                                $var="active";
                            echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$icount2."' class='".$var."'></li>";
                            $icount2++;
                        }
                        echo "</ol>";
                        $imgs=mysqli_query($con,"SELECT * FROM tbl_images where img_place='travel' and img_src like '%baguio%'");
                        while($img=mysqli_fetch_array($imgs)){
                            $var="";
                            if($icount==0)
                                $var="active";
                            $icount++;
                            echo "<div class='carousel-item ".$var."'><img class='d-block w-100' alt='...'src='".$img['img_src']."'></div>";
                        }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#travel1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#travel1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
                <div class="travDesc">
                    <b>BAGUIO</b>
                    <p>May 2018</p>
                    <p>Enjoys the cool Baguio breeze</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div id="travel2" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                        include "database/db.php";
                        $imgs=mysqli_query($con,"SELECT * FROM tbl_images where img_place='travel' and img_src like '%puerto%'");
                        $icount=0;
                        $icount2=0;
                        echo "<ol class='carousel-indicators'>";
                        
                        while($img=mysqli_fetch_array($imgs)){
                            $var="";
                            if($icount2==0)
                                $var="active";
                            echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$icount2."' class='".$var."'></li>";
                            $icount2++;
                        }
                        echo "</ol>";
                        $imgs=mysqli_query($con,"SELECT * FROM tbl_images where img_place='travel' and img_src like '%puerto%'");
                        while($img=mysqli_fetch_array($imgs)){
                            $var="";
                            if($icount==0)
                                $var="active";
                            $icount++;
                            echo "<div class='carousel-item ".$var."'><img class='d-block w-100' alt='...'src='".$img['img_src']."'></div>";
                        }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#travel2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#travel2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
                <div class="travDesc">
                    <b>PUERTO GALERA</b>
                    <p>May 2017</p>
                    <p>It is a popular scuba diving and snorkelling destination, also famous for its beautiful “pocket” white sandy beaches.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div id="travel3" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                        include "database/db.php";
                        $imgs=mysqli_query($con,"SELECT * FROM tbl_images where img_place='travel' and img_src like '%bicol%'");
                        $icount=0;
                        $icount2=0;
                        echo "<ol class='carousel-indicators'>";
                        
                        while($img=mysqli_fetch_array($imgs)){
                            $var="";
                            if($icount2==0)
                                $var="active";
                            echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$icount2."' class='".$var."'></li>";
                            $icount2++;
                        }
                        echo "</ol>";
                        $imgs=mysqli_query($con,"SELECT * FROM tbl_images where img_place='travel' and img_src like '%bicol%'");
                        while($img=mysqli_fetch_array($imgs)){
                            $var="";
                            if($icount==0)
                                $var="active";
                            $icount++;
                            echo "<div class='carousel-item ".$var."'><img class='d-block w-100' alt='...'src='".$img['img_src']."'></div>";
                        }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#travel3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#travel3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
                <div class="travDesc">
                    <b>Bicol, Pinamasagan</b>
                    <p>May 2014</p>
                    <p>Good infrastructure and some fine beaches that are great for surfing, diving, or relaxing and taking in the sun.</p>
                </div>
            </div>
        </div>
        <div class="places2">
            <div class="col-sm-4">
                <div id="travel4" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                        include "database/db.php";
                        $imgs=mysqli_query($con,"SELECT * FROM tbl_images where img_place='travel' and img_src like '%tanay%'");
                        $icount=0;
                        $icount2=0;
                        echo "<ol class='carousel-indicators'>";
                        
                        while($img=mysqli_fetch_array($imgs)){
                            $var="";
                            if($icount2==0)
                                $var="active";
                            echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$icount2."' class='".$var."'></li>";
                            $icount2++;
                        }
                        echo "</ol>";
                        $imgs=mysqli_query($con,"SELECT * FROM tbl_images where img_place='travel' and img_src like '%tanay%'");
                        while($img=mysqli_fetch_array($imgs)){
                            $var="";
                            if($icount==0)
                                $var="active";
                            $icount++;
                            echo "<div class='carousel-item ".$var."'><img class='d-block w-100' alt='...'src='".$img['img_src']."'></div>";
                        }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#travel4" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#travel4" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
                <div class="travDesc">
                    <b>Tanay Rizal, Treasure Mountain</b>
                    <p>DECEMBER 2018</p>
                    <p>You should stay overnight there to see the stars and witness the sun rise with the sea of clouds.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div id="travel5" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                        include "database/db.php";
                        $imgs=mysqli_query($con,"SELECT * FROM tbl_images where img_place='travel' and img_src like '%pinto%'");
                        $icount=0;
                        $icount2=0;
                        echo "<ol class='carousel-indicators'>";
                        
                        while($img=mysqli_fetch_array($imgs)){
                            $var="";
                            if($icount2==0)
                                $var="active";
                            echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$icount2."' class='".$var."'></li>";
                            $icount2++;
                        }
                        echo "</ol>";
                        $imgs=mysqli_query($con,"SELECT * FROM tbl_images where img_place='travel' and img_src like '%pinto%'");
                        while($img=mysqli_fetch_array($imgs)){
                            $var="";
                            if($icount==0)
                                $var="active";
                            $icount++;
                            echo "<div class='carousel-item ".$var."'><img class='d-block w-100' alt='...'src='".$img['img_src']."'></div>";
                        }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#travel5" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#travel5" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
                <div class="travDesc">
                    <b>Antipolo, Pinto Art Museum</b>
                    <p>August 2016 </p>
                    <p>Art plays a diplomatic role in bridging distinctive nationalities, worldviews, and communities.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div id="travel6" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                        include "database/db.php";
                        $imgs=mysqli_query($con,"SELECT * FROM tbl_images where img_place='travel' and img_src like '%intramuros%'");
                        $icount=0;
                        $icount2=0;
                        echo "<ol class='carousel-indicators'>";
                        
                        while($img=mysqli_fetch_array($imgs)){
                            $var="";
                            if($icount2==0)
                                $var="active";
                            echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$icount2."' class='".$var."'></li>";
                            $icount2++;
                        }
                        echo "</ol>";
                        $imgs=mysqli_query($con,"SELECT * FROM tbl_images where img_place='travel' and img_src like '%intramuros%'");
                        while($img=mysqli_fetch_array($imgs)){
                            $var="";
                            if($icount==0)
                                $var="active";
                            $icount++;
                            echo "<div class='carousel-item ".$var."'><img class='d-block w-100' alt='...'src='".$img['img_src']."'></div>";
                        }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#travel6" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#travel6" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
                <div class="travDesc">
                    <b>Manila, Intramuros</b>
                    <p>APRIL 2018</p>
                    <p>Old-world Intramuros is home to Spanish-era landmarks like Fort Santiago.</p>
                </div>
            </div>
        </div>
        <div class="favorites">
            <div class="row w-100">
                <div class="col-sm-5">
                    <p class="piHeader">Favorites</p>
                    <div class="btn_div">
                        <button class="btn_fav" value="Food">Food <i class="fa fa-arrow-right Food active" style="color:#c3a297" aria-hidden="true"></i>
                        </button>
                        <br>
                        <button class="btn_fav" value="Movie">Movie <i class="fa fa-arrow-right Movie" style="color:#c3a297" aria-hidden="true"></i>
                        </button>
                        <br>
                        <button class="btn_fav" value="Flower">Flower <i class="fa fa-arrow-right Flower" style="color:#c3a297" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="col-sm-1">
                </div>
                <div class="col-sm-6">
                    <div class="imgs_cont Food active">
                        <div id="fave1" class="carousel slide carousel-fade  w-50" style="text-align:center" data-ride="carousel">
                        <div class="carousel-inner" >
                            <?php
                                include "database/db.php";
                                $imgs=mysqli_query($con,"SELECT * FROM tbl_favorites where fave_category='FOODS'");
                                $icount=0;
                                $icount2=0;
                                echo "<ol class='carousel-indicators'>";
                                
                                while($img=mysqli_fetch_array($imgs)){
                                    $var="";
                                    if($icount2==0)
                                        $var="active";
                                    echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$icount2."' class='".$var."'></li>";
                                    $icount2++;
                                }
                                echo "</ol>";
                                $imgs=mysqli_query($con,"SELECT * FROM tbl_favorites where fave_category='FOODS'");
                                while($img=mysqli_fetch_array($imgs)){
                                    $var="";
                                    if($icount==0)
                                        $var="active";
                                    $icount++;
                                    echo "<div class='carousel-item ".$var."'><img class='d-block w-100' alt='...'src='".$img['fave_img_src']."'>
                                    <div class='carousel-caption d-none d-md-block'>
                                      <h5>".$img['fave_name']."</h5>
                                    </div>
                                    </div>";
                                }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#fave1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#fave1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                    </div>
                    <div class="imgs_cont Movie">
                            
                        <div id="fave2" class="carousel slide carousel-fade  w-50" style="text-align:center" data-ride="carousel">
                            <div class="carousel-inner" >
                                <?php
                                    include "database/db.php";
                                    $imgs=mysqli_query($con,"SELECT * FROM tbl_favorites where fave_category='MOVIE'");
                                    $icount=0;
                                    $icount2=0;
                                    echo "<ol class='carousel-indicators'>";
                                    
                                    while($img=mysqli_fetch_array($imgs)){
                                        $var="";
                                        if($icount2==0)
                                            $var="active";
                                        echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$icount2."' class='".$var."'></li>";
                                        $icount2++;
                                    }
                                    echo "</ol>";
                                    $imgs=mysqli_query($con,"SELECT * FROM tbl_favorites where fave_category='MOVIE'");
                                    while($img=mysqli_fetch_array($imgs)){
                                        $var="";
                                        if($icount==0)
                                            $var="active";
                                        $icount++;
                                        echo "<div class='carousel-item ".$var."'><img class='d-block w-100' alt='...'src='".$img['fave_img_src']."'>
                                        <div class='carousel-caption d-none d-md-block'>
                                        <h5>".$img['fave_name']."</h5>
                                        </div>
                                        </div>";
                                    }
                                ?>
                            </div>
                            <a class="carousel-control-prev" href="#fave2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#fave2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="imgs_cont Flower">
                        <div id="fave3" class="carousel slide carousel-fade  w-50" style="text-align:center" data-ride="carousel">
                            <div class="carousel-inner" >
                                <?php
                                    include "database/db.php";
                                    $imgs=mysqli_query($con,"SELECT * FROM tbl_favorites where fave_category='FLOWERS'");
                                    $icount=0;
                                    $icount2=0;
                                    echo "<ol class='carousel-indicators'>";
                                    
                                    while($img=mysqli_fetch_array($imgs)){
                                        $var="";
                                        if($icount2==0)
                                            $var="active";
                                        echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$icount2."' class='".$var."'></li>";
                                        $icount2++;
                                    }
                                    echo "</ol>";
                                    $imgs=mysqli_query($con,"SELECT * FROM tbl_favorites where fave_category='FLOWERS'");
                                    while($img=mysqli_fetch_array($imgs)){
                                        $var="";
                                        if($icount==0)
                                            $var="active";
                                        $icount++;
                                        echo "<div class='carousel-item ".$var."'><img class='d-block w-100' alt='...'src='".$img['fave_img_src']."'>
                                        <div class='carousel-caption d-none d-md-block'>
                                        <h5>".$img['fave_name']."</h5>
                                        </div>
                                        </div>";
                                    }
                                ?>
                            </div>
                            <a class="carousel-control-prev" href="#fave3" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#fave3" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hobby">
            <div class="row w-100">
                <div class="col-sm-6">
                <div class="imgs_cont Food active">
                    <div id="hobby1" class="carousel slide carousel-fade  w-50" style="text-align:center" data-ride="carousel">
                        <div class="carousel-inner" >
                            <?php
                                include "database/db.php";
                                $imgs=mysqli_query($con,"SELECT * FROM tbl_favorites where fave_category='Drawing'");
                                $icount=0;
                                $icount2=0;
                                echo "<ol class='carousel-indicators'>";
                                
                                while($img=mysqli_fetch_array($imgs)){
                                    $var="";
                                    if($icount2==0)
                                        $var="active";
                                    echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$icount2."' class='".$var."'></li>";
                                    $icount2++;
                                }
                                echo "</ol>";
                                $imgs=mysqli_query($con,"SELECT * FROM tbl_favorites where fave_category='Drawing'");
                                while($img=mysqli_fetch_array($imgs)){
                                    $var="";
                                    if($icount==0)
                                        $var="active";
                                    $icount++;
                                    echo "<div class='carousel-item ".$var."'><img class='d-block w-100' alt='...'src='".$img['fave_img_src']."'>
                                    <div class='carousel-caption d-none d-md-block'>
                                    <h5>".$img['fave_name']."</h5>
                                    </div>
                                    </div>";
                                }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#hobby1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#hobby1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="imgs_cont Movie">
                            
                        <div id="hobby2" class="carousel slide carousel-fade  w-50" style="text-align:center" data-ride="carousel">
                            <div class="carousel-inner" >
                                <?php
                                    include "database/db.php";
                                    $imgs=mysqli_query($con,"SELECT * FROM tbl_favorites where fave_category='Photo Manipulation(Photoshop)'");
                                    $icount=0;
                                    $icount2=0;
                                    echo "<ol class='carousel-indicators'>";
                                    
                                    while($img=mysqli_fetch_array($imgs)){
                                        $var="";
                                        if($icount2==0)
                                            $var="active";
                                        echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$icount2."' class='".$var."'></li>";
                                        $icount2++;
                                    }
                                    echo "</ol>";
                                    $imgs=mysqli_query($con,"SELECT * FROM tbl_favorites where fave_category='Photo Manipulation(Photoshop)'");
                                    while($img=mysqli_fetch_array($imgs)){
                                        $var="";
                                        if($icount==0)
                                            $var="active";
                                        $icount++;
                                        echo "<div class='carousel-item ".$var."'><img class='d-block w-100' alt='...'src='".$img['fave_img_src']."'>
                                        <div class='carousel-caption d-none d-md-block'>
                                        <h5>".$img['fave_name']."</h5>
                                        </div>
                                        </div>";
                                    }
                                ?>
                            </div>
                            <a class="carousel-control-prev" href="#hobby2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#hobby2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="imgs_cont Flower">
                        <div id="hobby3" class="carousel slide carousel-fade  w-50" style="text-align:center" data-ride="carousel">
                            <div class="carousel-inner" >
                                <?php
                                    include "database/db.php";
                                    $imgs=mysqli_query($con,"SELECT * FROM tbl_favorites where fave_category='Water Color Painting'");
                                    $icount=0;
                                    $icount2=0;
                                    echo "<ol class='carousel-indicators'>";
                                    
                                    while($img=mysqli_fetch_array($imgs)){
                                        $var="";
                                        if($icount2==0)
                                            $var="active";
                                        echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$icount2."' class='".$var."'></li>";
                                        $icount2++;
                                    }
                                    echo "</ol>";
                                    $imgs=mysqli_query($con,"SELECT * FROM tbl_favorites where fave_category='Water Color Painting'");
                                    while($img=mysqli_fetch_array($imgs)){
                                        $var="";
                                        if($icount==0)
                                            $var="active";
                                        $icount++;
                                        echo "<div class='carousel-item ".$var."'><img class='d-block w-100' alt='...'src='".$img['fave_img_src']."'>
                                        <div class='carousel-caption d-none d-md-block'>
                                        <h5>".$img['fave_name']."</h5>
                                        </div>
                                        </div>";
                                    }
                                ?>
                            </div>
                            <a class="carousel-control-prev" href="#hobby3" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#hobby3" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1">
                </div>
                <div class="col-sm-5">
                    <p class="piHeader">Hobby</p>
                    <div class="btn_div">
                        <button class="btn_fav" value="Food"><i class="fa fa-arrow-left Food active" style="color:#c3a297" aria-hidden="true"></i> Drawing 
                        </button>
                        <br>
                        <button class="btn_fav" value="Movie"><i class="fa fa-arrow-left Movie" style="color:#c3a297" aria-hidden="true"></i> Photoshop
                        </button>
                        <br>
                        <button class="btn_fav" value="Flower"><i class="fa fa-arrow-left Flower" style="color:#c3a297" aria-hidden="true"></i> Painting
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="school">
            <div class="row w-100">
                <div class="col-sm-5">
                    <p class="piHeader">School</p>
                    <div class="btn_div">
                        <button class="btn_fav" value="CCP">Central Colleges of the Philippines<i class="fa fa-arrow-right CCP active" style="color:#c3a297" aria-hidden="true"></i>
                        </button>
                        <br>
                        <button class="btn_fav" value="Seminars">Seminars <i class="fa fa-arrow-right Seminars" style="color:#c3a297" aria-hidden="true"></i>
                        </button>
                        <br>
                        <button class="btn_fav" value="Events">Events <i class="fa fa-arrow-right Events" style="color:#c3a297" aria-hidden="true"></i>
                        </button>
                        <br>
                        <button class="btn_fav" value="Projects">Projects <i class="fa fa-arrow-right Projects" style="color:#c3a297" aria-hidden="true"></i>
                        </button>
                        <br>
                        <button class="btn_fav" value="Friends">Friends <i class="fa fa-arrow-right Friends" style="color:#c3a297" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="col-sm-1">
                </div>
                <div class="col-sm-6">
                    <div class="imgs_cont CCP active">
                        <div id="school1" class="carousel slide carousel-fade  w-50" style="text-align:center" data-ride="carousel">
                            <div class="carousel-inner" >
                                <?php
                                    include "database/db.php";
                                    $imgs=mysqli_query($con,"SELECT * FROM tbl_school where school_category='ccp'");
                                    $icount=0;
                                    $icount2=0;
                                    echo "<ol class='carousel-indicators'>";
                                    
                                    while($img=mysqli_fetch_array($imgs)){
                                        $var="";
                                        if($icount2==0)
                                            $var="active";
                                        echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$icount2."' class='".$var."'></li>";
                                        $icount2++;
                                    }
                                    echo "</ol>";
                                    $imgs=mysqli_query($con,"SELECT * FROM tbl_school where school_category='ccp'");
                                    while($img=mysqli_fetch_array($imgs)){
                                        $var="";
                                        if($icount==0)
                                            $var="active";
                                        $icount++;
                                        echo "<div class='carousel-item ".$var."'><img class='d-block w-100' alt='...'src='".$img['school_img_src']."'>
                                        <div class='carousel-caption d-none d-md-block'>
                                        <h5>".$img['school_desc']."</h5>
                                        </div>
                                        </div>";
                                    }
                                ?>
                            </div>
                            <a class="carousel-control-prev" href="#school1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#school1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="imgs_cont Seminars ">
                        <div id="school2" class="carousel slide carousel-fade  w-50" style="text-align:center" data-ride="carousel">
                            <div class="carousel-inner" >
                                <?php
                                    include "database/db.php";
                                    $imgs=mysqli_query($con,"SELECT * FROM tbl_school where school_category='seminar'");
                                    $icount=0;
                                    $icount2=0;
                                    echo "<ol class='carousel-indicators'>";
                                    
                                    while($img=mysqli_fetch_array($imgs)){
                                        $var="";
                                        if($icount2==0)
                                            $var="active";
                                        echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$icount2."' class='".$var."'></li>";
                                        $icount2++;
                                    }
                                    echo "</ol>";
                                    $imgs=mysqli_query($con,"SELECT * FROM tbl_school where school_category='seminar'");
                                    while($img=mysqli_fetch_array($imgs)){
                                        $var="";
                                        if($icount==0)
                                            $var="active";
                                        $icount++;
                                        echo "<div class='carousel-item ".$var."'><img class='d-block w-100' alt='...'src='".$img['school_img_src']."'>
                                        <div class='carousel-caption d-none d-md-block'>
                                        <h5>".$img['school_desc']."</h5>
                                        </div>
                                        </div>";
                                    }
                                ?>
                            </div>
                            <a class="carousel-control-prev" href="#school2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#school2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="imgs_cont Events ">
                        <div id="school3" class="carousel slide carousel-fade  w-50" style="text-align:center" data-ride="carousel">
                            <div class="carousel-inner" >
                                <?php
                                    include "database/db.php";
                                    $imgs=mysqli_query($con,"SELECT * FROM tbl_school where school_category='event'");
                                    $icount=0;
                                    $icount2=0;
                                    echo "<ol class='carousel-indicators'>";
                                    
                                    while($img=mysqli_fetch_array($imgs)){
                                        $var="";
                                        if($icount2==0)
                                            $var="active";
                                        echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$icount2."' class='".$var."'></li>";
                                        $icount2++;
                                    }
                                    echo "</ol>";
                                    $imgs=mysqli_query($con,"SELECT * FROM tbl_school where school_category='event'");
                                    while($img=mysqli_fetch_array($imgs)){
                                        $var="";
                                        if($icount==0)
                                            $var="active";
                                        $icount++;
                                        echo "<div class='carousel-item ".$var."'><img class='d-block w-100' alt='...'src='".$img['school_img_src']."'>
                                        <div class='carousel-caption d-none d-md-block'>
                                        <h5>".$img['school_desc']."</h5>
                                        </div>
                                        </div>";
                                    }
                                ?>
                            </div>
                            <a class="carousel-control-prev" href="#school3" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#school3" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="imgs_cont Projects ">
                        <div id="school4" class="carousel slide carousel-fade  w-50" style="text-align:center" data-ride="carousel">
                            <div class="carousel-inner" >
                                <?php
                                    include "database/db.php";
                                    $imgs=mysqli_query($con,"SELECT * FROM tbl_school where school_category='project'");
                                    $icount=0;
                                    $icount2=0;
                                    echo "<ol class='carousel-indicators'>";
                                    
                                    while($img=mysqli_fetch_array($imgs)){
                                        $var="";
                                        if($icount2==0)
                                            $var="active";
                                        echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$icount2."' class='".$var."'></li>";
                                        $icount2++;
                                    }
                                    echo "</ol>";
                                    $imgs=mysqli_query($con,"SELECT * FROM tbl_school where school_category='project'");
                                    while($img=mysqli_fetch_array($imgs)){
                                        $var="";
                                        if($icount==0)
                                            $var="active";
                                        $icount++;
                                        echo "<div class='carousel-item ".$var."'><img class='d-block w-100' alt='...'src='".$img['school_img_src']."'>
                                        <div class='carousel-caption d-none d-md-block'>
                                        <h5>".$img['school_desc']."</h5>
                                        </div>
                                        </div>";
                                    }
                                ?>
                            </div>
                            <a class="carousel-control-prev" href="#school4" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#school4" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="imgs_cont Friends ">
                        <div id="school5" class="carousel slide carousel-fade  w-50" style="text-align:center" data-ride="carousel">
                            <div class="carousel-inner" >
                                <?php
                                    include "database/db.php";
                                    $imgs=mysqli_query($con,"SELECT * FROM tbl_school where school_category='FRIENDS'");
                                    $icount=0;
                                    $icount2=0;
                                    echo "<ol class='carousel-indicators'>";
                                    
                                    while($img=mysqli_fetch_array($imgs)){
                                        $var="";
                                        if($icount2==0)
                                            $var="active";
                                        echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$icount2."' class='".$var."'></li>";
                                        $icount2++;
                                    }
                                    echo "</ol>";
                                    $imgs=mysqli_query($con,"SELECT * FROM tbl_school where school_category='FRIENDS'");
                                    while($img=mysqli_fetch_array($imgs)){
                                        $var="";
                                        if($icount==0)
                                            $var="active";
                                        $icount++;
                                        echo "<div class='carousel-item ".$var."'><img class='d-block w-100' alt='...'src='".$img['school_img_src']."'>
                                        <div class='carousel-caption d-none d-md-block'>
                                        <h5>".$img['school_desc']."</h5>
                                        </div>
                                        </div>";
                                    }
                                ?>
                            </div>
                            <a class="carousel-control-prev" href="#school5" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#school5" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
        <script>
            $(".favorites .btn_fav").on("click",function(){
                var value=$(this).val();
                console.log(value)
                $(".favorites .fa.fa-arrow-right.active").removeClass("active");
                $(".favorites .imgs_cont.active").removeClass("active");
                $(".favorites ."+value).addClass("active");
            })
            $(".hobby .btn_fav").on("click",function(){
                var value=$(this).val();
                console.log(value)
                $(".hobby .fa.fa-arrow-left.active").removeClass("active");
                $(".hobby .imgs_cont.active").removeClass("active");
                $(".hobby ."+value).addClass("active");
            })
            $(".school .btn_fav").on("click",function(){
                var value=$(this).val();
                console.log(value)
                $(".school .fa.fa-arrow-right.active").removeClass("active");
                $(".school .imgs_cont.active").removeClass("active");
                $(".school ."+value).addClass("active");
            })
        </script>
    </body>
</html>