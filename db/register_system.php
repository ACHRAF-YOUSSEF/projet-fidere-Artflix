<?php
    include("connection.php");

    $nom_ = $_POST['nom'];
    $email_ = $_POST["email"];
    $password_ = $_POST["password"];

    $stmt = $idcon->prepare("INSERT INTO user (nom, email, password) VALUES (:nom, :email, :pass)");
    
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":pass", $pass);

    $nom = $nom_;
    $email = $email_;
    $pass = $password_;
    
    $stmt->execute();

    header("Location: /Artflix/php/login.php");
?>
