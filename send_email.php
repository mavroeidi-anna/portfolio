<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up email parameters
    $to = 'zoemavroeidi@gmail.com'; // Change this to your email address
    $subject = 'New message from website';
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Sorry, there was an error sending your message.';
    }
} else {
    echo 'Method not allowed.';
}
?>
