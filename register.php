<?php
if(isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $time = $_POST['time'];
    $message = $_POST['message'];

    // Construct email message
    $to = 'ashish619k@gmail.com'; 
    $subject = 'Registration Details from website';
    $email_body = "Name: $name\nEmail: $email\nPhone: $phone\nCourse: $course\nTime: $time\nMessage: $message";

    // Send email
    $headers = "From: $email"; // Set the sender's email as "From" in the email header
    mail($to, $subject, $email_body, $headers);

    // Redirect after sending the email (optional)
    header('Location: training-details.html'); 
    exit();
}
?>