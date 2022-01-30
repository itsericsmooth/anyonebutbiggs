<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
?>

<?php
	$email_from = 'clintsmithforcongress@gmail.com';

	$email_subject = "New Form submission";

	$email_body = "Please add $name.\n to the mailing list using $visitor_email.\n"
?>

<?php

  $to = "clintsmithforcongress@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

 ?>
