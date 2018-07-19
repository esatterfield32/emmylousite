<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $to = 'esatterfield32@gmail.com';
    $subject = "Website Contact";
    
    $message = 'Name: ' .$_REQUEST['fname']. " " .$_REQUEST['lname']. "\r\n\r\n";
    $message .= 'Email: ' .$_REQUEST['email'] . "\r\n\r\n";
    $message .= 'Message: ' .$_REQUEST['message'] . "\r\n\r\n";
    
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
