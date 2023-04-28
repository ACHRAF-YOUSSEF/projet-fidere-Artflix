<?php
    include("connection.php");

    try {
    
        $imagedata = file_get_contents("../images/image2.jpg");

        $item = "INSERT INTO item(title, dimention,	price, details, image, category) VALUES(:title, :size, :price, :details, :image_, :category)";

        $stmt = $idcon->prepare($item);

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':size', $size);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':details', $details);
        $stmt->bindParam(':image_', $image_, PDO::PARAM_LOB);
        $stmt->bindParam(':category', $category);

        $title = 'Flight of Freedom';
        $size = '18 x 24';
        $price = 250.00;
        $details = "This breathtaking artwork captures the beauty and grace of a flock of birds in flight. Its vibrant colors and sweeping lines make it a stunning centerpiece for any room.";
        $image_ = $imagedata;
        $category = "category-2";
        $stmt->execute();

        $imagedata = file_get_contents("../images/image4.jpg");
        $title = 'Hummingbird Haven';
        $size = '18 x 24';
        $price = 175.00;
        $details = "This delightful piece showcases the delicate and intricate beauty of the hummingbird. Its soft, muted colors and intricate details make it a charming addition to any decor.";
        $image_ = $imagedata;
        $category = "category-2";
        $stmt->execute();

        $imagedata = file_get_contents("../images/image6.jpg");
        $title = 'Hummingbird Haven';
        $size = '18 x 24';
        $price = 175.00;
        $details = "This delightful piece showcases the delicate and intricate beauty of the hummingbird. Its soft, muted colors and intricate details make it a charming addition to any decor.";
        $image_ = $imagedata;
        $category = "category-2";
        $stmt->execute();
        echo"New records created successfully";
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }
?>