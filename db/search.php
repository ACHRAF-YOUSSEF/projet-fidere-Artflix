<?php
    try {
        if (isset($_GET['query'])) {
            $query = $_GET['query'];
        } else {
            $query = '';
        }

        $user= "root";
        $pass= "";

        $idcon= new PDO("mysql:host=localhost;dbname=artflix", $user, $pass);
        $idcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $idcon->prepare("SELECT distinct * FROM item0 WHERE title LIKE :query");

        $stmt->bindValue(':query', '%' . $query . '%', PDO::PARAM_STR);

        $stmt->execute();

        ?>
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
                    <br>
                    <br>
                    <br>
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
                            </div><div class="photo-gallery"> <?php

        while ($row = $stmt->fetch()) {
            $name = $row['name'];
            $title = $row['title'];
            $blob_data = $row['image'];
            $dimention = $row['dimention'];
            $price = $row['price'];
            $details =  $row['details'];
            $category = $row['category'];

            ?>
                <?php
                    echo '<div class="pic ' . $category . '" onclick="window.location.href=' . "'../../Artflix/php/single-product.php?name=" . $title . "'" . '">';
                    echo '<img src="data:image/jpeg;base64,' . base64_encode($blob_data). '" alt="' . $name . '">';
                    echo "</div>"; 
                ?>
            
            <?php
            
        } 
        ?>
        </div>
        </div>
        </section>
    
        <!-- newsletter -->
        <?php
            include("../php/newsletter.php"); 
        ?>

        <!-- footer -->
        <?php
            include("../php/footer.php");
        ?>
        </body>
        </html>
        <?php
    } catch (PDOException $e) {
        echo $sql. "<br>". $e->getMessage();
    }
?>