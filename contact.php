<?php
if(isset($_POST['send'])){
    $to = 'esatterfield32@gmail.com';
    $subject = "Website Contact";
    
    $message = 'Name: ' .$_POST['fname']. " " .$_POST['lname']. "\r\n\r\n";
    $message .= 'Email: ' .$_POST['email'] . "\r\n\r\n";
    $message .= 'Message: ' .$_POST['message'] . "\r\n\r\n";
    
}
echo $message;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset= "utf-8" />
        <title>Message Sent</title>
        <link rel = "stylesheet" type = "text/css" href = "style.css"/>
        <meta name = "viewport" content = "width = device-width, inital -scale =1.0">
    </head>
    <body>
        <h1>Thank you!</h1>
        <p>Your message has sent!</p>
        <h1>Woops!</h1>
        <p>There was a problem sending your message.</p>
    </body>
</html>
