<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "your.email@example.com";
    $subject = "New Message from Contact Form";
    $message_body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $message_body)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
}
?>
