<? if($_SERVER['REQUEST_METHOD'] == "POST" ) {

	$destination = 'john@doe.com'; // change this to your email.

	// ##################################################
	// DON'T EDIT BELOW UNLESS YOU KNOW WHAT YOU'RE DOING
	// ##################################################

	$email   = $_POST['email'];
	$name	 = $_POST['name'];
	$message = $_POST['message'];
	$subject = $name;
	$headers = "From: ".$name." <".$email.">\r\n" .
			 "Reply-To: ".$name." <".$email.">\r\n" .
			 "X-Mailer: PHP/" . phpversion() . "\r\n" .
			 "MIME-Version: 1.0\r\n" .
			 "Content-Type: text/plain; charset=\"iso-8859-1\r\n" .
			 "Content-Transfer-Encoding: 8bit\r\n\r\n";

	mail($destination, $subject, $message, $headers);

}