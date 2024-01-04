<?php

  if (!empty($_POST)) {
    
    $recipientEmail = "diegnavpro@gmail.com";
    $subject = $_POST["subject"];
    $senderName = $_POST["name"];
    $senderEmail = $_POST["email"];
    $senderTel = $_POST["tel"];
    $message = $_POST["message"];

    // Build the email content using a template
    $emailTemplate = "
      Hello,

      Someone has just contacted you. Here are the details:

      Name: $senderName
      Email: $senderEmail
      Phone: $senderTel

      Message:
      $message
    ";

    // Send the email
    $mailReturn = mail($recipientEmail, $subject, $emailTemplate,"");

  }
  
  header("Location:../pages/contact.html");