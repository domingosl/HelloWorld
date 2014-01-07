<? if($_SERVER['REQUEST_METHOD'] == "POST" ) {

	$email = $_POST['email'];
	$file  = 'emails.txt';

	if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

		// Open the file to get existing content
		$current = file_get_contents($file);

		// Append a new email to the file
		$current .= "\n".$email;

		// Write the contents back to the file
		file_put_contents($file, $current);

	}

}