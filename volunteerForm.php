<?php
$first_name = $_POST["First Name"];
$last_name =  $_POST["Last Name"];
$email = $_POST["Email"];
$phone = $_POST["Phone Number"];
$birthday = $_POST["Date of Birth"];
$state = $_POST["State"];
$city = $_POST["City"];
$zip = $_POST["Zip"];
$time = $_POST["Available Date & Time"];
$interests = $_POST["Volunteer Work Interests"];
$questions = $_POST["Questions"];

$email_from = "scrnet.org";

$email_subject = "New Volunteer Application";

$email_body = 
"First Name: $first_name\n" 
"Last Name: $last_name\n"
"Email: $email\n"
"Phone Number: $phone\n"
"Date of Birth: $birthday\n"
"State: $state\n"
"City: $city\n"
"Zip: $zip\n"
"Available Date & Time: $time\n"
"Volunteer Work Interests: $interests\n"
"Questions: $questions\n";

$to = "marcus@guynsincity.com";

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: thankYou.html");
?>