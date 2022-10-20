<?php
$address = $_POST['address'];
$number = $_POST['number'];
$name = $_POST['name'];
$title = $_POST['title'];
$message = "from: " . $address . "\r\n" .
"telephone number: " . $number . "\r\n" .
"name: " . $name . "\r\n" .
"message: " . $_POST['message'];
mail($address, $title, $message);
?>
