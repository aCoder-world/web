<?php
$name = $_POST{'name'};
$email = $_POST{'email'};
$message = $_POST{'message'};
$subject=$_POST{'subject'};

$formcontent = "From: $name \n Message: $message";
$mailTo=" ravigupta00687@gmail.com";                 // jesko pass bhejna ho
$mailheader="From: $email \r \n";      //jesko bejna ha
mail($mailTo, $subject, $formcontent, $mailheader) or die("Error");
    echo "Thank You!";
?>  