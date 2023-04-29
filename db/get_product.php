<?php 
    if (isset($_GET["name"])) {
        try {
            $user= "root";
            $pass= "";

            $idcon= new PDO("mysql:host=localhost;dbname=artflix", $user, $pass);
            $idcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $idcon->prepare("SELECT * FROM item0 WHERE title = :title");

            $stmt->bindParam(":title", $title);

            $title = $_GET["name"];

            $stmt->execute();

            while ($row=$stmt->fetch()) {
                $name = $row['name'];
                $title = $row['title'];
                $blob_data = $row['image'];
                $dimention = $row['dimention'];
                $price = $row['price'];
                $details =  $row['details'];
                $category = $row['category'];

                echo '<div class="single-pro-image">';
                echo '<img src="data:image/jpeg;base64,'. base64_encode($blob_data) . '" width="100%" id="MainImg" alt="image">';
                echo '</div>';
                echo '<div class="single-pro-details">';
                echo "<h1>" . $title . "</h1>";
                echo "<h4>Size: " . $dimention . " inches</h4>";
                echo "<h2>$" . $price . "</h2>";
                echo '<form action="" method="POST">';
                echo ' <input type="number" name = "nb" value = "1">
                <button class="normal" name = "add">Add To Cart</button>
                <input type="hidden" name="product_name" value = "' . $title .'">
                <input type="hidden" name="price" value = "' . $price . '">';
                echo '</form><h4>Product Details</h4>';
                echo '<span>' . $details . '</span>';
                echo '</div>';
            }
        } catch (PDOException $e) {
            echo $sql. "<br>". $e->getMessage();
        }
    }
?>