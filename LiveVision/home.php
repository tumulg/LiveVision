<?php

session_start();

?>
<html>
    <head>
        <title>LiveVision</title>
        <link rel="stylesheet" href="home.css">
        <link rel="shortcut icon" type="image" href="images/logoO_1.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    </head>
    <body>
        <div class ="banner">
            <div class="navbar">
                <a href="home.php">
                <div class="logo"><img src="images\logoO_1.png"></div></a>
                <ul>
                    <li><a href="shoplv.php">SHOP</a></li>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="aboutuslv.php">ABOUT US</a></li>
                </ul>
                <a href="profilelv.php">
                <div class="pflogo"><img src="images/gprofile1.png"></div></a>
            </div>
            </div>
        </div>
            <div class="content">
                <div class="section sec-shadow" style=" width: 100%; border-radius: 20px; background-image: url(images/secbg_1.png);">
                <div class="mb-5 lv" style="text-align: center;"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card box-shadow" style="width: 18rem; margin: 0 60px;">
                                <a href="backend/valorantultimate.py">
                                <img src="images/valo1.png" class="card-img-top" alt="..." style="border-radius: 2.5%;"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card box-shadow" style="width: 18rem; margin: 0 60px;">
                                <a href="backend/fortnitehealthbar.py">
                                <img src="images/fortnite1.png" class="card-img-top" alt="..." style="border-radius: 2.5%;"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card box-shadow" style="width: 18rem; margin: 0 60px;">
                                <a href="backend/apexlegendshealthbar.py">
                                <img src="images/apex1.png" class="card-img-top" alt="..." style="border-radius: 2.5%;"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer style="background-image: url(images/footer_2.jpg); width: 100%; height: 12%; padding: 10px 0px;">
            <div class="footcontent">
                <li><a href="aboutuslv.php" style="padding-left: 280px; padding-top: 15px; color: black;">About Us</a></li>
                <li><a href="terms.php" style="padding-left: 290px; padding-top: 15px;">Terms and Conditions</a></li>
                <li><a href="contactus.php" style="padding-left: 300px; padding-top: 15px;">Contact Us</a></li>
                <li><a style="padding-left: 965px; padding-top: 15px; color: black">© 2023 LiveVision Company. All rights reserved.</a></li>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>