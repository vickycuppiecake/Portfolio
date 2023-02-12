<?php
  if (isset($_POST["name"], $_POST["email"], $_POST["message"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Add code here to send an email with the form data

    echo "Thank you for contacting me, $name. I will get back to you shortly.";
  } else {
    echo "There was an error processing your form. Please try again.";
  }
?>
