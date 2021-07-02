<?php
session_start();
if ($_POST) {
    if( isset($_POST['data-name'])&& !empty($_POST['data-name'])&&
    isset($_POST['data-email'])&& !empty($_POST['data-email'])&&
    isset($_POST['data-object'])&& !empty($_POST['data-object'])&&
    isset($_POST['data-message'])&& !empty($_POST['data-message']) ){
        $name = $_POST['data-name'];
        $object = $_POST['data-object'];
        $email = $_POST['data-email'];
        $message = $_POST['data-message'];
        $recipient = 's.rolland@codeur.online';
        $send = 'message envoyé par '.$email.' : '.$message;
        $headerFields = array(
        "From: {$email}",
        "MIME-Version: 1.0",
        "Content-Type: text/html;charset=utf-8"
        );
        mail($recipient, $object, $send, implode("\r\n", $headerFields));
        echo "message envoyé à ".$email;
        $_SESSION['success'] = 'Message envoyé !';
        header('Location:index.php#section__contact');
    }
    else{
        $_SESSION['error'] = 'Il manque des informations...';
        header('Location:index.php#section__contact');
    }
} else {
    $_SESSION['error'] = 'La page de traitement du formulaire n\'est pas accessible via l\url...';
    header('Location:index.php#section__contact');
}

?>