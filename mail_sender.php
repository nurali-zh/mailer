<?php
$message = $_POST['message'];
$address = $_POST['address'];
$number = $_POST['number'];
$name = $_POST['name'];
$title = $_POST['title'];
$headers = "from: " . $address . "\r\n" .
"telephone number: " . $number . "\r\n" .
"name: " . $name;
mail($address, $title, $message, $headers);
?>
