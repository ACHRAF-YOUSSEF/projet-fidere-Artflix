<?php
    session_start();

    include("connection.php");

    $email_ = $_POST["email"];
    $password_ = $_POST["password"];

    $stmt = $idcon->prepare("SELECT * FROM user WHERE email = :email AND password = :pass");
    
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":pass", $pass);

    $email = $email_;
    $pass = $password_;
    
    $stmt->execute();

    while ($row=$stmt->fetch()) {
        $stmt->bindColumn("nom", $nom);

        $_SESSION['nom'] = $nom;
        $_SESSION['success'] = "You are now logged in";

        header("Location: /Artflix/php/home.php");
    }
?>
