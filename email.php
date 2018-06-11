<?php
    // from the form
    $name = trim(strip_tags($_POST['name']));
    $email = trim(strip_tags($_POST['email']));
    $wechat = trim(strip_tags($_POST['wechat']));
    $referral = trim(strip_tags($_POST['referral']));
    $content = htmlentities($_POST['content']);

    // set here
    $subject = "咨询: $name, Email：$email,  微信：$wechat, 推荐人：$referral,  \r\n";
    $to = 'edu@diguojiaoyu.com';

    $body = <<<HTML
$content
HTML;

    $headers = "From: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    // send the email
    mail($to, $subject, $body, $headers);
    // redirect afterwords, if needed
    header('Location: contact.php');
?>