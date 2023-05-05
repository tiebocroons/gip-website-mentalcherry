<?php
if (isset($_GET['submit'])) {
  $name = $_GET['name'];
  $email = $_GET['email'];
  $subject = $_GET['subject'];
  $message = $_GET['message'];

  $to = "Tiebo.croons@gmail.com";
  $headers = "From: " . $email;
  $body = "Naam: " . $name . "\nE-mail: " . $email . "\nOnderwerp: " . $subject . "\nBericht: " . $message;

  mail($to, $subject, $body, $headers);
}
?>