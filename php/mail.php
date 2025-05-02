<?php

  if (!empty($_POST)) {
    $recipientEmail = "diegnavpro@gmail.com";
    $subject = $_POST["subject"];
    $senderName = $_POST["name"];
    $senderEmail = $_POST["email"];
    $senderTel = $_POST["tel"];
    $message = $_POST["message"];

    $emailTemplate = "
        Hello,

        Someone has just contacted you. Here are the details:

        Name: $senderName
        Email: $senderEmail
        Phone: $senderTel

        Message:
        $message
    ";

    $mailReturn = mail($recipientEmail, $subject, $emailTemplate,"");

    if ($mailReturn) {
        header("Location: ../pages/contact.html?success=1");
    }
    else {
      header("Location: ../pages/contact.html?error=1");
    }
  }
  else {
    header("Location: ../pages/contact.html?error=1");
  }
