<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$education = $_POST['education'];
$address = $_POST['address'];
$formcontent=" From: $name \n Phone: $phone \n Age:$age  \n Education:$education \n Address: $address";
$to = "spatel255@students.gsu.edu";
$subject = "Contact Form";
$mailheader = "From: WPSummer@cs.gsu.edu \r\n";
mail($to, $subject, $formcontent, $mailheader);
echo "Thank You!";
?>
