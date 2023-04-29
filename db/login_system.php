<?php
    session_start();

    include("connection.php");

    $email_ = $_POST["email"];
    $password_ = $_POST["password"];

    $stmt = $idcon->prepare("SELECT * FROM user0 WHERE email = :email AND password = :pass");
    
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":pass", $pass);

    $email = $email_;
    $pass = $password_;
    
    $stmt->execute();

    while ($row=$stmt->fetch()) {
        $stmt->bindColumn("nom", $nom);
        $stmt->bindColumn("status", $status);

        if ($status === 1) {
            $_SESSION['nom'] = $nom;
            $_SESSION['success'] = "You are now logged in";
    
            echo "<div class='alert alert-success> you are successfully logged in.</div>";
            header("Location: /Artflix/php/home.php");
        } else {
            header("Location: /Artflix/php/home.php");
        }
    }
?>
