<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Add code here to send the email using the form data


    $to = "your-email@example.com"; // Replace with your email address
    $subject = "New contact form submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    $mailSent = mail($to, $subject, $body, $headers);

    if ($mailSent) {
        // Email sent successfully
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        // Failed to send email
        echo "Sorry, there was an error sending your message. Please try again later.";
    }

}
?>