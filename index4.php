<?php
  echo '<h1>Params page</h1>';
  
  $a = $_GET["a"];
  $b = $_GET["b"];
  
  $c = $a+$b;
  
  echo "sum of params = $c";

  if (isset($_POST['fname'], $_POST['email'])) {
	$fname = htmlspecialchars($_POST['fname']);
	$email = htmlspecialchars($_POST['email']);

	// show the $name and $email
	echo "Thanks $name for your subscription.<br>";
	echo "Please confirm it in your inbox of the email $email.";
} else {
	echo 'You need to provide your name and email address.';
}

?>
