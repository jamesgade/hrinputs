<?php
	header("refresh:2;url=index.html");
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for valuable feedback!<br /> Page will be re-direct to Homepage in 2 seconds.'
	);

    $name = @trim(stripslashes($_POST['name']));
	//$first_name = @trim(stripslashes($_POST['first_name']));
	//$last_name = @trim(stripslashes($_POST['last_name']));
	//$phone = @trim(stripslashes($_POST['phone'])); 
    $email = @trim(stripslashes($_POST['email']));
	//$city = @trim(stripslashes($_POST['city']));
	$subject = "Feedback";
    $message = @trim(stripslashes($_POST['message'])); 
	//$message = $_POST['message'];
	
    $email_from = $email;
    $email_to = 'gadejames48@gmail.com';//replace with your email

    //$body = 'name: ' . $name . "\n\n" . 'phone: ' . $phone . "\n\n" . 'email: ' . $email . "\n\n" . 'message: ' . $message;
	
	$body = "Hi, I'm\n .$name. '\n\n' .$message. '\n\n' Thanks,\n .$name. '\n' .$email.";

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
    echo json_encode($status);
    die;