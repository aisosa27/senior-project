<?php
// Check for form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = strip_tags(trim($_POST["message"]));

    // Specify the email where you want to receive the form submissions
    $to = 'careerdevhub@gmail.com';

    // Create the email subject
    $subject = "New contact form submission from $name";

    // Construct the email body
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $name <$email>";

    // Send the email
    mail($to, $subject, $email_content, $headers);

    // Redirect to a thank-you page or display a message
    echo 'Thank you for your message. We will get back to you soon.';
}
?>

