<?php
	header('Content-type: application/json');
	$status = 'Thank you for contact us. We will contact you  As early as possible ';
	
    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
	$number = @trim(stripslashes($_POST['number1']));
    $subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'ictparimal@gmail.com';//replace with your email
	
	 $body = 'Name: ' . $name . "\n\n" . 'Number: ' . $number . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;
    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;
	