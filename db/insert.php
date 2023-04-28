<?php
    include("connection.php");

    try {
    
        $imagedata = file_get_contents("../images/image1.jpg");

        $item = "INSERT INTO item(title, dimention,	price, details, image) VALUES(:title, :size, :price, :details, :image_)";

        $stmt = $idcon->prepare($item);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':size', $size);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':details', $details);
        $stmt->bindParam(':image_', $image_, PDO::PARAM_LOB);

        $title = 'still life';
        $size = '24 x 30';
        $price = 50000.00;
        $details = "his abstract piece is a beautiful blend of bold colors and textured brushstrokes. The canvas is filled with layers of blues, greens, and purples that give the impression of depth and movement. The thick application of paint creates a tactile surface that adds to the piece's overall sense of energy and vibrancy. The composition is balanced and dynamic, with a central focal point that draws the viewer's eye into the canvas. The overall effect is both calming and invigorating, making this piece a perfect addition to any art collection.";
        $image_ = $imagedata;

        $stmt->execute();
        echo"New records created successfully";
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }
?>