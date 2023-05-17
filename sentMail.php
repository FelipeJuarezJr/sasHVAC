<?php 

if (isset($_POST['submit'])) {
    $mailto = "info@soughtafterservices.com"; // My email address *** UPDATE TO USE JAY'S EMAIL ADDRESS ***

    // Getting customer data
    $name = $_POST['name']; // Getting customer name
    $fromEmail = $_POST['email']; // Getting customer email
    $phone = $_POST['phone']; // Getting customer phone number
    $request = $_POST['request']; // Getting customer request
    $subject = "New Customer Contact Info!"; //$_POST['subject']; // Getting subject line from client
    $subject2 = "Confirmation: Message was submitted successfully!"; // For customer confirmation

    // Email body I will receive
    $message = "Client Name: " . $name . "\n"
    . "Phone Number: " . $phone . "\n\n";
    // . "Client Message: " . "\n" . $_POST['message'];

    // Message for client confirmation
    $message2 = "Dear " . $name . "," . "\n"
    . "Thank you for contacting Sought After Services. We'll call or email you shortly!" . "\n\n"
    //. "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
    . "-Best Regards," . " Sought After Services L.L.C.";

    // Email headers
    $headers = "From: " . $fromEmail; // Client email, I will receive
    $headers2 = "From: " . $mailto; // This client will receive

    //PHP mailer function
    $result1 = mail($mailto, $subject, $message, $headers); // This email sent to my address
    $result2 = mail($fromEmail, $subject2, $message2, $headers2); // This confirmation email to client

    // Check if mails sent successfully
    if ($result1 && $result2) {
        $success = "Your message was sent successfully!";
    } else {
        $failed = "Sorry! Message was not sent. Try again later please!";
    }
}
;?>