<html>
<body>
	<form method="post" action="mail_sender.php">
		Name: <input type="text" name='name'>
		<br>
		contact phone number: <input type="tel" name="number">
		<br>
		contact mail address: <input type="email" name="address">
		<br>
		your feedback: <input type="text" name="message">
		<br>
		<input type="submit">
	</form>
<?php
$message = 'This is simple messages';
//mail('futuredancemusicstar@gmail.com', 'test', $message);
?>
