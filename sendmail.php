<?php
    if($_POST['subject'] == 1) {
        $subject = 'Hello';
    } elseif($_POST['subject'] == 2) {
        $subject = 'How are you?';
    } elseif ($_POST['subject'] == 3) {
        $subject = 'Wtf?';
    } else {
        $subject = 'Theme';
    }
    
    $to = "kostian73kostian@gmail.com";
    $from = trim($_POST['email']);
    
    $message = htmlspecialchars($_POST['message']);
    $message = urldecode($message);
    $message = trim($message);
    
    $headers = "From: $from" . "\r\n" .
    "Reply-To: $from" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();
    
    if(mail($to, $subject, $message, $headers)) {
        echo 'Send mail';
    } else {
        echo 'Not send mail';
    }
?>