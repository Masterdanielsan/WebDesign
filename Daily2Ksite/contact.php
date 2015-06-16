<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

if ($field_name =='' || $field_email=='' ||$field_message == '')
	{?>
	<script language="javascript" type="text/javascript">
		alert('Please complete the form and resubmit.');
		window.location = 'contact.html';
	</script>
    <?php
	}
else
{
	
$mail_to = 'contact@daily2k.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: ';
$body_message .= ''.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'contact.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to webmaster@daily2k.com');
		window.location = 'contact.html';
	</script>
    
<?php
}
}
?>