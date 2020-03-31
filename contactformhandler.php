<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];


    $email_from = 'vlaterwater@gmail.com';
    $email_subject = "New Form Submit";
    $email_body = "User Name : $name .\n". 
                    "User Email: $visitor_email.\n".
                        "User Messahge: $message.\n";
    $to = "michael.hayes@younglings.africa" ;
    
    $headers = "Friom: $email_from \r\n";
    &headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.html");

?>