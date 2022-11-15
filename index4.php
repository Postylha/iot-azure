<?php
  if (isset($_POST['fname'], $_POST['email'])) {
	$fname = htmlspecialchars($_POST['fname']);
	$lname = htmlspecialchars($_POST['lname']);
	
	$email = htmlspecialchars($_POST['email']);

	// show the $name and $email
	echo "Thanks $fname for your subscription.<br>";
	echo "Please check your inbox $email for futher instruction.";
	

	$file1 = fopen("main.txt","a") or die("Unable to open file!");
	$text1 = "firstName=" . $fname . " lastName=" . $lname . " email=" . $email;

	fwrite($file1, $text1);
	fclose($file1);
	
	$file2 = fopen("additional.txt","a") or die("Unable to open file!");
	$text1 = "phone=" . htmlspecialchars($_POST['phone']) . " birthday=" . htmlspecialchars($_POST['birthday']) . " information=" . htmlspecialchars($_POST['information']);
	
	fwrite($file2, $text1);
	fclose($file2);
} else {
	echo 'You need to provide your name and email address.';
}

?>
