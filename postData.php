<?php
$email = $_POST['email'];
$phone = $_POST['phone'];
$to = 'order@salesgenerator.pro';
$subject = 'subject';
$message = 'email: ' . $_POST['email'] . ' phone: ' . $_POST['phone'];;
$headers = 'From: order@salesgenerator.pro' . "\r\n" .
    'Reply-To: order@salesgenerator.pro' . "\r\n";
    mail($to, $subject, $message, $headers);
