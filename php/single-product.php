<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/375f585449.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/product_style.css">
        <title>Artflix</title>
    </head>
    <body>
        <section id="section1">
            <header class="header">
                <nav class="navbar">
                    <a href="/Artflix/php/home.php">Home</a>
                    <a href="/Artflix/php/login.php">Account</a>
                    <a href="">Services</a>
                    <a href="">Contact</a>
                </nav>
                <form action="#" class="search-bar">
                    <input type="text" placeholder="Search...">
                    <input type="button" value="search">
                </form>
            </header>
        </section>

        <?php
            include("product_details.php");
        ?>

        <section id="product1" class="section-p1">
            <h3>Similar:</h3>
            <div class="pro-container">
                <!-- <?php
                    // include("get_similar_product.php");
                ?> -->
            </div>
        </section>

        <?php
            include("newsletter.php"); 
        ?>

        <?php
            include("footer.php");
        ?>
    </body>
</html>