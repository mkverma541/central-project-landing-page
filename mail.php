<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "mkverma541@gmail.com"; // Replace with the actual recipient's email address
    $subject = "New Enquiry";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>window.location.href = 'thank-you.html';</script>";
    } else {
      echo "<script>window.alert('Oops! Something went wrong and we couldn\'t send your enquiry.');</script>";   
    }
} else {
    echo "This script should be accessed through a form submission.";
} 
 
?>
