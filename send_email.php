<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = "pritiparida109@gmail.com"; // Replace with your email address
    $subject = "New Appointment Request";
    $body = "You have received a new appointment request.\n\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Phone: $phone\n\n" .
            "Message:\n$message\n";

    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your appointment request has been sent.";
    } else {
        echo "Sorry, something went wrong. Please try again.";
    }
} else {
    echo "Invalid Request";
}
?>
