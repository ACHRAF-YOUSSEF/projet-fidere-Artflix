<?php
    require('../../phpmailer/includes/PHPMailer.php');
    require('../../phpmailer/includes/SMTP.php');
    require('../../phpmailer/includes/Exception.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\STMP;
    use PHPMailer\PHPMailer\Exception;

    session_start();

    if(isset($_SESSION['Gmail'])) {
        header("Location: /Artflix/php/home.php");
    } else {
        ?>    
            <script>alert();</script>
        <?php
    }
    
    if (isset($_POST['email'])) {    
        $nomPrenom = $_POST['nom'];
        $Gmail = $_POST['email'];
        $Password = $_POST['password'];
        
        include("connection.php");

        try {
            $stmt = $idcon->prepare("INSERT INTO user0 (nom, email, password) VALUES (:nom, :email, :pass)");

            $stmt->bindParam(":nom", $nomPrenom);
            $stmt->bindParam(":email", $Gmail);
            $stmt->bindParam(":pass", $Password);

            $stmt->execute();

            $message='<h3>Veuillez activer votre compte en cliquant sur ce lien: </h3>
            <form method="POST" action="localhost/Artflix/db/actifaccount.php">
            <input type="hidden" value="'.$Gmail.'" name="gmail" >
            <input type="submit" name="Activation" value="Lien">
            <label><a href="efsgdhnhdgsrdytj"></a></label>
            </form>';

            $mail = new PHPMailer();

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = 'true';
            $mail->SMTPSecure = "tls";
            $mail->CharSet = 'UTF-8';
            $mail->Port = "587";
            $mail->Username = $Gmail;
            $mail->Password = "";
            $mail->Subject = "Test Email Using PHPMailer";
            $mail->setFrom("youssefachraf09@gmail.com");
            $mail->isHTML(true);
            $mail->header="MIME-Version: 1.0 \r\n Content-type:text/html;charset=UTF-8";
            $mail->Body = $message;
            $mail->addAddress("$Gmail");
            $mail->Send();
            $mail->smtpClose();
    
            header("Location: /Artflix/php/login.php");
        } catch (PDOException $e) {
            echo 'Email existe déja';
        }
    } else {
        ?>
            <script>alert(5);</script>
        <?php
    }
?>