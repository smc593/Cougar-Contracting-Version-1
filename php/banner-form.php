<?php

	// specify your email here
	$to = 'adnan@webicode.com';

	// Assigning data from $_POST array to variables
    if (isset($_POST['name'])) { $name = $_POST['name']; }
    if (isset($_POST['email'])) { $from = $_POST['email']; }
    if (isset($_POST['phone'])) { $phone = $_POST['phone']; }
    if (isset($_POST['msgform'])) { $msgform = $_POST['msgform']; }
	
	// Construct subject of the email
	$subject = 'QUICK SERVICE REQUEST  ' . $name;

	// Construct email body
	$body_message .= 'Name: ' . $name . "\r\n";
	$body_message .= 'Email: ' . $from . "\r\n";
	$body_message .= 'Phone: ' . $phone . "\r\n";
	$body_message .= 'Message: ' . $msgform . "\r\n";

	// Construct headers of the message
	$headers = 'From: ' . $from . "\r\n";
	$headers .= 'Reply-To: ' . $from . "\r\n";

	$mail_sent = mail($to, $subject, $body_message, $headers);

	if ($mail_sent == true){ ?>
<script language="javascript" type="text/javascript">
			window.alert("Sent Successfuly.");
		</script>
<?php } else { ?>
<script language="javascript" type="text/javascript">
        	window.alert("Error! Please Try Again Later.");
        </script>
<?php
	} // End else
?>
<html>
    <head>
    <style type="text/css"></style>
    </head>
    <body>
    <table width="550" border="0" cellspacing="0" cellpadding="15">
      <tr bgcolor="#eeeeff">
        <td>Name</td>
        <td><?php echo $name; ?></td>
      </tr>
      <tr bgcolor="#eeeeff">
        <td>Email</td>
        <td><?php echo $from; ?></td>
      </tr>
      <tr bgcolor="#eeeeff">
        <td>Subject</td>
        <td><?php echo $phone; ?></td>
      </tr>
      <tr bgcolor="#eeeeff">
        <td>Website</td>
        <td><?php echo $msgform; ?></td>
      </tr>
    </table>
</body>
</html>