<?php
//get data from from
$name = $_POST['name'];
$email = $_POST['emailaddress'];
$message = $_POST['message'];
$number = $_POST['mobile'];

$to = "vanshikalodhi3@gmail.com";

$subject = "Mail From github.com";
$txt = "Name = ". $name . "\r\n Email = " . $email . "\r\n Message =" . $message ." \r\n Mobile number =". $number;
     $headers = "From: noreply@yoursite.com" . "\r\n" .
     "CC: somebodyelse@example.com";
     if($email!=Null){
         mail($to,$subjest,$txt,$headers);
     }
//redirect
header("Location:thankyou.html");
?>