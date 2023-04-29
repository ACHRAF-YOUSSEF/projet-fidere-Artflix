<?php
    try {
        $user= "root";
        $pass= "";

        $idcon= new PDO("mysql:host=localhost;dbname=artflix",$user,$pass);
        $idcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $idcon->prepare("select * from item0");

        $stmt->execute();

        echo "<table border=\"l\"><tr><th>ID</th><th>title</th><th>dimention</th><th>price</th><th>details</th><th>image</th><th>category</th></tr>"; 
       
        while ($row=$stmt->fetch()) {
            echo "<tr> <td> ".$row['id'] ,"</td> <td>". $row['title']."</td> <td>". $row['dimention'] . "</td> <td>" . $row['price']."</td> <td>" . $row['details']."</td> <td>";
            
            $blob_data = $row['image'];
            
            echo '<img src="data:image/jpeg;base64,' . base64_encode($blob_data) . '" height=200" width="100" />';
            echo  "</td> <td>" . $row['category'];
            echo "</td></tr>";
        } 
        
        echo "</table>";
    } catch (PDOException $e) {
        echo $sql. "<br>". $e->getMessage();
    } 

    $conn = null;
?>