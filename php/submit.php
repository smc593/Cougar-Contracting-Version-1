<?php

	// specify your email here
	$to = 'adnan@webicode.com';

	// Assigning data from $_POST array to variables
    if (isset($_POST['name'])) { $name = $_POST['name']; }
    if (isset($_POST['email'])) { $from = $_POST['email']; }
    if (isset($_POST['company'])) { $company = $_POST['company']; }
    if (isset($_POST['website'])) { $website = $_POST['website']; }
    if (isset($_POST['message'])) { $message = $_POST['message']; }
	
	// Construct subject of the email
	$subject = 'Handy Man, Plumber HTML Template Contact ' . $name;

	// Construct email body
	$body_message .= 'Name: ' . $name . "\r\n";
	$body_message .= 'Email: ' . $from . "\r\n";
	$body_message .= 'Phone ' . $company . "\r\n";
	$body_message .= 'Full Address: ' . $website . "\r\n";
	$body_message .= 'Message: ' . $message . "\r\n";

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
        <td><?php echo $company; ?></td>
      </tr>
      <tr bgcolor="#eeeeff">
        <td>Website</td>
        <td><?php echo $website; ?></td>
      </tr>
      
      <tr bgcolor="#eeeeff">
        <td>Website</td>
        <td><?php echo $message; ?></td>
      </tr>
    </table>
</body>
</html>
