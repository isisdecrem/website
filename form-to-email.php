<?php
if(!isset($_POST['submit']))
{
    //This page should not be accessed directly. Need to submit the form
    echo "error; you need to submit the form!";
}
$name = $_POST['contactname']
$visitor_email = $_POST['contactemail']
$subject = $_POST['contactsubject']
$message = $_POST['contactmessage']

//Validate first
if(empty($name) || empty($visitor_email))
{
    echo "Name and email are mandatory!";
    exit;
}

$email_from = 'isisdecrem@gmail.com';
$email_subject = "New Form Submission";
$email_body = "You have recieved a new message from the user $name. \n".
    "email address: $visitor_email \n".
    "Here is the subject: $subject \n".
    "Here is the message: $message".

$to = "isisdecrem@gmail.com";
$headers = "From: $email_from \r\n";

//Send the email
mail($to, $email_subject, $email_body, $headers);

?>

