<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $Amount = $_POST["Amount"];
    $phone = $_POST["phone"];

    // Compose the email message
    $to = "rahulmandal7239@gmail.com";
    $subject = "New Form Submission";
    $emailBody = "Name: $name\n";
    $emailBody .= "Amount: $Amount\n";
    $emailBody .= "phone: $phone\n";

    // Send the email
    mail($to, $subject, $emailBody);

    // Redirect to the thank you page
    header("Location: thankyou.html");
    exit;
}
?>
