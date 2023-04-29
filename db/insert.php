<?php
    include("connection.php");

    try {
    
        $imagedata = file_get_contents("../images/image1.jpg");

        $item = "INSERT INTO item0(title, dimention,	price, details, image, category) VALUES(:title, :size, :price, :details, :image_, :category)";

        $stmt = $idcon->prepare($item);

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':size', $size);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':details', $details);
        $stmt->bindParam(':image_', $image_, PDO::PARAM_LOB);
        $stmt->bindParam(':category', $category);

        $title = 'Hummingbirds';
        $size = '18 x 24';
        $price = 60.00;
        $details = "This Displate showcases Martin Johnson Heade's stunning painting 'Hummingbirds,' with its vibrant green foliage and hovering birds. The medium size is perfect for adding a touch of nature-inspired art to a study or bedroom, and the Displate's metal construction ensures it will last for years to come.";
        $image_ = $imagedata;
        $category = "category-1";
        $stmt->execute();

        $imagedata = file_get_contents("../images/image5.jpg");
        $title = 'Blue Tit';
        $size = '18 x 24';
        $price = 45.00;
        $details = "This Displate features Archibald Thorburn's beautiful painting 'Blue Tit,' with its small but colorful bird perched on a branch. The small size is perfect for adding a touch of whimsy to a small wall space, and the Displate's metal construction ensures it will last for years to come.";
        $image_ = $imagedata;
        $category = "category-1";
        $stmt->execute();
        echo"New records created successfully";
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }
?>