<?php
if(isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Construct email message
    $to = 'abdulsameehpm2525@gmail.com'; 
    $subject = 'Form Submission from website';
    $email_body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

    // Send email
    $headers = "From: $email"; // Set the sender's email as "From" in the email header
    mail($to, $subject, $email_body, $headers);

    // Redirect after sending the email (optional)
    header('Location: contact.html'); 
    exit();
}
?>



