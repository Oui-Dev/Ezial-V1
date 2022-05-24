<?php
    $location = filter_var(trim(@$_GET["loc"]), FILTER_SANITIZE_STRING);

    if($location == "index") {
        $URL = "../../$location";
        @$form1 = $_POST["send"];
    } else {
        http_response_code(403);
        exit();
    }

    // Si bouton envoyer mail de contact
    if(isset($form1)) {
    	$nom = filter_var(trim($_POST["nom"]), FILTER_SANITIZE_STRING, array('flags' => FILTER_FLAG_NO_ENCODE_QUOTES));
        $prenom = filter_var(trim($_POST["prenom"]), FILTER_SANITIZE_STRING, array('flags' => FILTER_FLAG_NO_ENCODE_QUOTES));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $content = filter_var(trim($_POST['content']), FILTER_SANITIZE_STRING, array('flags' => FILTER_FLAG_NO_ENCODE_QUOTES));

        $valid = true;

        if(strlen($nom) > 30) {
            setcookie("erreur", "id=nom : Nom trop long", time()+(60), "/");
            $valid = false;
        } else if(strlen($prenom) > 30) {
            setcookie("erreur", "id=prenom : Prénom trop long", time()+(60), "/");
            $valid = false;
        } else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false || empty($email)) {
            setcookie("erreur", "id=email : Email invalide", time()+(60), "/");
            $valid = false;
        } else if(strlen($content) > 2000) {
            setcookie("erreur", "id=content : Contenu trop long", time()+(60), "/");
            $valid = false;
        }

        if($valid) {
            $sendContactMail = true;
            $path = "../../";
            include("private/mailer.php");
        } else {
            setcookie("openContactForm", "error", time()+(60), "/");
        }

        header("Location: $URL");
    } else {
        http_response_code(403);
        exit();
    }
?>