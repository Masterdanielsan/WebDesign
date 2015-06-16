<!DOCTYPE html>
<html lang="en">
<head>
<meta charset=utf-8>
<title>Daily 2K</title>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src=d2k.js></script>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
<div id="header">
<div id="hcontent">
<div id="logo">
<a href="Daily2K.com"><img src="images/ghost.png" alt="Daily 2K Logo"width="128" height="128"/></a>
<span style="vertical-align:top" > <-cool logo </span>
</div>
<div id="socialicons">
<span style="vertical-align:top">Find us on:</span>
<a href="#"><img src="images/gp1.png" width="64" height="64" alt="Google Plus"></a>
<a href="#"><img src="images/li1.png" width="64" height="64" alt="Linked In Logo"></a>
<a href="#"><img src="images/tw1.png" width="64" height="64" alt="Twitter Logo"></a>
<a href="#"><img src="images/fb1.png" width="64" height="64" alt="Facebook Logo"></a>
</div>
</div><!-- end hcontent -->
</div><!-- end header -->

<nav class="rounded">
<ul>
<li><a href="#">Link 1</a></li>
<li><a href="#">Link 2</a></li>
<li><a href="#">Link 3</a></li>
<li><a href="#">Link 4</a></li>
<li><a href="#">Link 5</a></li>
</ul>
</nav>

<div id="container">

<?php //PHP STUFF GOES HERE!

$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$message = $_POST['message'];


if ($message == '')
	{
	echo "
	<fieldset> <legend>Message Daily 2K!</legend> <form action=\"contact.php\" method=\"POST\"> 
	<p><label for=\"name\">Name:</label> <input name=\"name\" id=\"name\" type=\"text\" /></p> 
	<p><label for=\"email\">Email:</label> <input name=\"email\" id=\"email\" type=\"text\" /></p> 
        <p><label for=\"phone\">Phone:</label> <input name=\"phone\" id=\"phone\" type=\"text\" /></p>
        <p><label for=\"location\">Job Location:</label> <input name=\"location\" id=\"location\" type=\"text\" /></p>
	<p><label for=\"message\">Message:</label> <textarea cols=\"100\" rows=\"11\" name=\"message\" id=\"message\"></textarea></p> 
	<p><input name=\"send\" style=\"margin-left: 150px;\" class=\"formbutton\" value=\"Send\" type=\"submit\" /></p> 
	</form> </fieldset>";
	}
else
	{
	$to = "contact@daily2k.com";
	$subject = "Message from D2K automessage system: $name";
	$message = "$name ($phone) from [$location] wrote us: \r\r $message";
	$headers = "From:" . $email;
	mail($to,$subject,$message,$headers) or die(error());
	echo "Your message has been sent. Thank you for contacting Daily2k!";

	}


?>




</div><!-- end .container -->
<div class="footer">
  <div align="center">
  <span><f1>© Daily 2K 2012. Webmaster: Daniel Smith</f1></span>
  <br></br>
  <span><f1>webmaster@daily2k.com | contact@daily2k.com</f1></span></div>
</div>  <!-- end .footer -->
<script src=d2kex.js></script>
</body>
</html>
