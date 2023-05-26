<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = "tiebo.croons@gmail.com";
  $headers = "From: " . $email;
  $body = "Naam: " . $name . "\nE-mail: " . $email . "\nOnderwerp: " . $subject . "\nBericht: " . $message;

  mail($to, $subject, $body, $headers)  {
    echo "Bedankt voor uw bericht. We hebben uw e-mail ontvangen en nemen zo spoedig mogelijk contact met u op.";
  } else {
    echo "Er is een probleem opgetreden bij het versturen van uw e-mail. Probeer het later opnieuw.";
  }
 }
?>