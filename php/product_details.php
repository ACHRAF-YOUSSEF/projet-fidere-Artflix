<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="/Artflix/images/image3.jpg" width="100%" id="MainImg" alt="image">
    </div>

    <div class="single-pro-details">
        <!-- <h6><?php //echo htmlspecialchars($product["type"]) ?></h6> -->
        <h1>still life</h1>
        <!-- <h4><?php //echo htmlspecialchars($product["name"]) ?></h4> -->
        <h4>Size: 24 x 30 inches</h4>
        <!-- <h2>$<?php //echo htmlspecialchars($product["price"]) ?></h2> -->
        <h2>$50 000.00</h2>
        <form action="" method="POST">
            <input type="number" name = "nb" value = "1">
            <button class="normal" name = "add">Add To Cart</button>
            <input type="hidden" name="product_name" value = "<?php //echo htmlspecialchars($product["name"]) ?>">
            <input type="hidden" name="price" value = "<?php //echo htmlspecialchars($product["price"]) ?>">
        </form>
        <h4>Product Details</h4>
        <span>
            <?php //echo htmlspecialchars($product["description"]) ?>
            his abstract piece is a beautiful blend of bold colors and textured brushstrokes. 
            The canvas is filled with layers of blues, greens, and purples that give the impression of depth and movement. 
            The thick application of paint creates a tactile surface that adds to the piece's overall sense of energy and vibrancy. 
            The composition is balanced and dynamic, with a central focal point that draws the viewer's eye into the canvas. 
            The overall effect is both calming and invigorating, making this piece a perfect addition to any art collection.
        </span>
    </div>
</section>