<?php
//get data from form  

$fname   = $_POST['fname'];
$lname   = $_POST['lname']
$email   = $_POST['email'];
$country = $_POST['country']
$message = $_POST['message'];
$to = "saivra.official@mail.com";
$subject = "New contact us query";
$txt ="FirstName = ". $fname . " LastName = ". $lname . " \r\n  Email = " . $email ." \r\n country = ". $country . "\r\n Message =" . $message;
$headers = "From: noreply@rrsteksecurity.com" . "\r\n" .
// "CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:success.html");
?>