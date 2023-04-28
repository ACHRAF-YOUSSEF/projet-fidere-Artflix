<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/Artflix/css/home_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <script src="/Artflix/js/home_script.js" defer></script>
        <title>Artflix</title>
    </head>
    <body>
        <section id="section1">
            <header class="header">
                <nav class="navbar">
                    <a href="/Artflix/php/home.php">Home</a>
                    <a href="/Artflix/php/login.php">Account</a>
                    <a href="#">Services</a>
                    <a href="#">Contact</a>
                </nav>
                <form action="/Artflix/db/search.php" method="get" class="search-bar">
                    <input type="text" name="query" placeholder="Search...">
                </form>
            </header>
        </section>
   
        <!-- <section id="section1">
            <a href="/Artflix/php/home.php"><img src= "/images/" class= "logo" alt="logo"></a>
            <div>
                <ul id="navbar">
                    <div class = "form">
                        <form action="" method= "get">
                            <input type="text" name= "query" placeholder="Search Product">
                        </form>
                    </div>
                    <li><a class= "active" href= "/Artflix/php/home.php">Home</a></li>
                    <li><a href= "/Artflix/php/login.php">Account</a></li>
                    <li><a href= "#">Service</a></li>
                    <li><a href= "#">Contact</a></li>
                    <li id="lg-bag"><a href="#"><i class= "fas fa-shopping-bag"></i></a></li>
                    <a href="#" id="close"><i class="fas fa-times"></i></a>
                </ul>
            </div>
            <div id="mobile">
                <a href="#"><i class="fas fa-shopping-bag"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </section> -->

        <section id="section3">
            <div class="wrapper">
                <i id="left" class="fa-solid fa-angle-left"></i>
                <div class="carousel">
                    <!-- <img src="/Artflix/images/image1.jpg" alt="img" draggable="false">
                    <img src="/Artflix/images/image2.jpg" alt="img" draggable="false">
                    <img src="/Artflix/images/image3.jpg" alt="img" draggable="false">
                    <img src="/Artflix/images/image4.jpg" alt="img" draggable="false">
                    <img src="/Artflix/images/image5.jpg" alt="img" draggable="false">
                    <img src="/Artflix/images/image6.jpg" alt="img" draggable="false">
                    <img src="/Artflix/images/image7.jpg" alt="img" draggable="false">
                    <img src="/Artflix/images/image8.jpg" alt="img" draggable="false"> -->
                    <?php include("../db/get_featured_list.php") ?>
                </div>
                <i id="right" class="fa-solid fa-angle-right"></i>
            </div>
        </section>

        <section id="section2">
            <input type="radio" name="photos" id="check1" checked>
            <input type="radio" name="photos" id="check2">
            <input type="radio" name="photos" id="check3">
            <input type="radio" name="photos" id="check4">

            <div class="container">
                <h1>OUR PHOTO GALLERY</h1>

                <div class="top-content">
                    <h3>PHOTO GALLERY</h3>
                    <label for="check1">ALL PHOTOS</label>
                    <label for="check2">CATEGORY 1 PHOTOS</label>
                    <label for="check3">CATEGORY 2 PHOTOS</label>
                    <label for="check4">CATEGORY 3 PHOTOS</label>
                </div>

                <div class="photo-gallery">
                    <!-- <div class="pic category-3" onclick="window.location.href='single-product.php?name=image3'">
                        <img src="/Artflix/images/image3.jpg" alt="picture3">
                    </div>
                    <div class="pic category-3">
                        <img src="/Artflix/images/image7.jpg" alt="picture7">
                    </div>
                    <div class="pic category-3">
                        <img src="/Artflix/images/image8.jpg" alt="picture8">
                    </div>
                    <div class="pic category-1">
                        <img src="/Artflix/images/image1.jpg" alt="picture1">
                    </div>
                    <div class="pic category-1">
                        <img src="/Artflix/images/image5.jpg" alt="picture5">
                    </div>
                    <div class="pic category-2">
                        <img src="/Artflix/images/image4.jpg" alt="picture4">
                    </div>
                    <div class="pic category-2">
                        <img src="/Artflix/images/image2.jpg" alt="picture2">
                    </div>
                    <div class="pic category-2">
                        <img src="/Artflix/images/image6.jpg" alt="picture6">
                    </div> -->
                    <?php include("../db/get_list_of_arts.php") ?>
                </div>
            </div>
        </section>
    
        <!-- newsletter -->
        <?php
            include("newsletter.php"); 
        ?>

        <!-- footer -->
        <?php
            include("footer.php");
        ?>
    </body>
</html>