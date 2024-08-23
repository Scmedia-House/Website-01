<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Change the recipient email address
    $to = "Sunny@scmedia-house.com";
    
    // Email subject
    $email_subject = "New Contact Form Submission: $subject";
    
    // Email content
    $email_body = "You have received a new message from your website contact form.\n\n".
        "Name: $name\n".
        "Email: $email\n".
        "Subject: $subject\n".
        "Message:\n$message\n";
    
    // Send email
    mail($to, $email_subject, $email_body);

    // Redirect back to the form page with success message
    header("Location: index.html?message=success");
    exit;
} else {
    // If not a POST request, redirect back to the form page
    header("Location: index.html");
    exit;
}
?>