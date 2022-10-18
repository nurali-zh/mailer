<?php
$message = $_POST['message'];
$address = $_POST['address'];
$number = $_POST['number'];
$name = $_POST['name'];
$headers = "From: "$name" "$address" . "\r\n"
сontact number: $number';
mail('futuredancemusicstar@gmail.com', 'test', $message, $headers);
?>
