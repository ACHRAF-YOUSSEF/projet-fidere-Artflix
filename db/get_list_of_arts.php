<?php
    try {
        $user= "root";
        $pass= "";

        $idcon= new PDO("mysql:host=localhost;dbname=artflix",$user,$pass);
        $idcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $idcon->prepare("select * from item0");

        $stmt->execute();
        
        while ($row = $stmt->fetch()) {
            $name = $row['name'];
            $title = $row['title'];
            $blob_data = $row['image'];
            $dimention = $row['dimention'];
            $price = $row['price'];
            $details =  $row['details'];
            $category = $row['category'];
            
            echo '<div class="pic ' . $category . '" onclick="window.location.href=' . "'single-product.php?name=" . $title . "'" . '">';
            echo '<img src="data:image/jpeg;base64,' . base64_encode($blob_data). '" alt="' . $name . '">';
            echo "</div>";
        } 
    } catch (PDOException $e) {
        echo $sql. "<br>". $e->getMessage();
    } 

    $conn = null;
?>