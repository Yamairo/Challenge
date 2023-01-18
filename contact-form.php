<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if(empty($name) || empty($email) || empty($message)){
    echo "Please fill out all fields";
    exit;
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Invalid email format";
    exit;
}

$to = "foodalarm00@gmail.com";
$subject = "New Contact Form Submission";
$body = "Name: $name\nEmail: $email\nMessage: $message";
$headers = "From: $email";

if(mail($to, $subject, $body, $headers)){
    echo "Your message has been sent";
}else{
    echo "An error occurred, please try again later";
}

?>