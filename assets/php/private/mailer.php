<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
    require $path.'/libraries/PHPMailer/src/PHPMailer.php';
    require $path.'/libraries/PHPMailer/src/Exception.php';
    require $path.'/libraries/PHPMailer/src/SMTP.php';
    
    // Envoi mail de contact
    if(isset($sendContactMail)) {
        $mail = setMailer();
        $msg="
            <html>
                <body>
                    <h4>Message de : <b>$prenom " . ucwords($nom) . "</b></h4>
                    <h5>Son email : <b>$email</b></h5>
                    <h6>Contenu :</h6>
                    <p style='white-space: pre-line;'>$content</p>
                </body>
            </html>";
        
        $mail->setFrom('contact@ezial.fr', 'Ezial');
        $mail->addAddress('kevin.blaise24@gmail.com');
        $mail->Subject = "Message de $prenom " . ucwords($nom);
        $mail->msgHTML($msg);

        if ($mail->send())
            setcookie("success", "Mail envoyé", time()+(60), "/");
        else
            setcookie("success", "Échec de l'envoi", time()+(60), "/");
    } else {
        http_response_code(403);
        exit();
    }

    // Fonction chargé d'initialiser la lib
    function setMailer(): PHPMailer {
        $mail = new PHPMailer;
        $mail->CharSet = 'UTF-8';
        $mail->SMTPDebug = false;
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.fr';
        $mail->Port = 587;
    
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = 'contact@ezial.fr';
        $mail->Password = 'mail2022MDP.*';

        return $mail;
    }
?>