<?php
    if(isset($_POST['gmail'])) {
        include('connection.php');

        $Gmail = $_POST['gmail'];
        
        $stmt = $idcon->prepare("UPDATE `user0` SET `status` = true WHERE `email`='$Gmail'");

        $stmt->execute();
    }
?>