  <?PHP
	//Very simple PHP email page, takes the users information, and sends an email to me, and the user. 
 	$to = "200203355@student.georgianc.on.ca";
    $name = $_POST['name']; 
    $email_from = $_POST['email']; 
     $message = $_POST['message']; 
	 mail($to, 'CV Website', $message);
     mail($email_from, 'Thank you for your email', 'I will reply as soon as I can!');
     header('Location: thankyou.html');

	 ?>