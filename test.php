<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['your-name'];
    $email = $_POST['your-email'];
    $phone = $_POST['your-phone'];

     // Customize your autoresponder message
    $subject = 'Thank you for your submission';
    $message = "Dear $name,\n\nThank you for submitting your information. We will contact you soon.\n\nBest regards,\nThe ABCD Team";

    // Send autoresponder email
    $headers = "From: noreply@abcd.com" . "\r\n" .
        "Reply-To: noreply@abcd.com" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();
    mail($email, $subject, $message, $headers);

    // Send form response to support email
    $to = 'pankajmahajan.in@gmail.com';
    $subject = 'Form Submission';
    $message = "Name: $name\nEmail: $email\nPhone: $phone";
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();
    mail($to, $subject, $message, $headers);

    // Redirect to external link
    header('Location: https://hugetech-inc.blogspot.com');
    exit;
}
?>
