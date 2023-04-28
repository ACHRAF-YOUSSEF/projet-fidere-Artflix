<?php
    try {
        $user = "root";
        $pass = "";
        $database = "artflix"; 

        $idcon = new PDO("mysql:host=localhost;dbname=" . $database, $user, $pass);

        echo "success !!";
    } catch (PDOException $e) {
        echo "connexion failed: " . $e->getMessage();
    }
?>