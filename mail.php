<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Create the email message
    $to = "alaminorko70@gmail.com"; // Replace with your Gmail address
    $subject = "Contact Form Submission - $subject";
    $message = "Name: $name\nPhone: $phone\nEmail: $email\nMessage: $message";

    // Send the email
    $headers = "From: $email"; // Set the sender's email as the "From" address
    mail($to, $subject, $message, $headers);

    // Redirect back to the form or a thank-you page
    header("Location: thank_you.html"); // Create a thank-you page

    // Exit to prevent further processing
    exit();
}
?>