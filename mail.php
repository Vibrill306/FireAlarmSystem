<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$number = $_POST['number'];
$city= $_POST['city'];
$to = "info@vibrillfiresafe.com";
$subject = "Lead From Fire Alarm System Microwebsite - Contact Us Form";
$txt ="Name = ". $name . "
\r\n  Email = " . $email . "
\r\n Number =" . $number . "
\r\n City =" . $city; 
$headers = "From: info@vibrillfiresafe.com" . "\r\n" .
"CC: enquiry@vibrillfiresafe.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");