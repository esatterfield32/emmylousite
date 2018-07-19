<?php
if(isset($_POST['submit'])){
    $to = 'esatterfield32@gmail.com';
    $subject = "Website Contact";
    
    $message = 'Name: ' .$_POST['fname']. " " .$_POST['lname']. "\r\n\r\n";
    $message .= 'Email: ' .$_POST['email'] . "\r\n\r\n";
    $message .= 'Message: ' .$_POST['message'] . "\r\n\r\n";
    
    echo $message;
}
?>
<h1>Thank you!</h1>
<p>Your message has sent!</p>
<h1>Woops!</h1>
<p>There was a problem sending your message.</p>