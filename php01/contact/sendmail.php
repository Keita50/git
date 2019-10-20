<?php
require 'vendor/autoload.php';
Dotenv::load(__DIR__);
 
$sendgrid_username = $_ENV[''];
$sendgrid_password = $_ENV['your_password'];
$from              = $_ENV['keita.igarashi555@gmail.com'];
$to                = $_ENV['bov.talk@gmail.com'];
 
$name = $_POST['name'];
$emailadd = $_POST['email'];
$message = $_POST['inquiry_content'];
$password = $_POST['password'];
 
$sendgrid = new SendGrid($sendgrid_username, $sendgrid_password, array("turn_off_ssl_verification" => true));
$email    = new SendGridEmail();
$email->addTo($to)->
       setFrom($from)->
       setFromName("問合せフォーム")->
       setSubject("[ContactForm] $subject")->
       setText("Name: $name rnEmail: $emailadd rnSubject: $subject rnMessage: $message rn")->
       setHtml("<strong>Name:</strong> $name<br /> <strong>Email:</strong> $emailadd<br /> <strong>Subject:</strong> $subject<br /> <strong>Message:</strong> $message<br /> ")->
       addCategory('contact');
 
$response = $sendgrid->send($email);
//var_dump($response);
 
// 正常終了時にthanks.htmlへリダイレクト
header('Location: submit.php');
exit(); ?>
