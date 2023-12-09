<?php
if(isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Construct email message
    $to = 'ashishk619@gmail.com'; 
    $subject = 'Contact Form Submission from website';
    $email_body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

    // Send email
    $headers = "From: $email"; // Set the sender's email as "From" in the email header
    mail($to, $subject, $email_body, $headers);

   // Check if the email was sent successfully
   if ($sent) {
    // Alert for successful submission
    echo '<script>alert("Thank you! Your message has been sent.");</script>';
    // Redirect after sending the email (optional)
    header('Location: training-details.html'); 
    exit();
} else {
    // Alert for failed submission
    echo '<script>alert("Oops! Something went wrong. Please try again later.");</script>';
}
}
?>



