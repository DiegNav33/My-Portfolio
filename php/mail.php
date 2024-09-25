<?php

  if (!empty($_POST)) {
    $recipientEmail = "diegnavpro@gmail.com";
    $subject = $_POST["subject"];
    $senderName = $_POST["name"];
    $senderEmail = $_POST["email"];
    $senderTel = $_POST["tel"];
    $message = $_POST["message"];

    // Construire le contenu de l'e-mail en utilisant un modèle
    $emailTemplate = "
        Hello,

        Someone has just contacted you. Here are the details:

        Name: $senderName
        Email: $senderEmail
        Phone: $senderTel

        Message:
        $message
    ";

    // Envoyer l'e-mail
    $mailReturn = mail($recipientEmail, $subject, $emailTemplate,"");

    // Vérifier si l'envoi de l'e-mail a réussi ou non
    if ($mailReturn) {
        // Redirection avec succès
        header("Location: ../pages/contact.html?success=1");
    }
    else {
      // Afficher l'erreur
      // $error = error_get_last()['message'];
      // echo "Error sending email: " . $error;
      // exit();
      header("Location: ../pages/contact.html?error=1");
    }
  }
  else {
    // Redirection avec erreur si le formulaire est vide
    header("Location: ../pages/contact.html?error=1");
  }


// if (!empty($_POST)) {
//   $recipientEmail = "diegnavpro@gmail.com";
//   $subject = $_POST["subject"];
//   $senderName = $_POST["name"];
//   $senderEmail = $_POST["email"]; // Utiliser l'adresse e-mail fournie par l'utilisateur comme expéditeur
//   $senderTel = $_POST["tel"];
//   $message = $_POST["message"];

//   // Construire le contenu de l'e-mail en utilisant un modèle
//   $emailTemplate = "
//       Hello,

//       Someone has just contacted you. Here are the details:

//       Name: $senderName
//       Email: $senderEmail
//       Phone: $senderTel

//       Message:
//       $message
//   ";

//   // Ajouter des en-têtes pour définir l'expéditeur et d'autres informations
//   $headers = "From: $senderName <$senderEmail>\r\n";
//   $headers .= "Reply-To: $senderEmail\r\n";
//   $headers .= "X-Mailer: PHP/" . phpversion();

//   // Envoyer l'e-mail
//   $mailReturn = mail($recipientEmail, $subject, $emailTemplate, $headers);
// }
// header("Location:../pages/contact.html");

  // if (!empty($_POST)) {

  //   $recipientEmail = "diegnavpro@gmail.com";
  //   $subject = $_POST["subject"];
  //   $senderName = $_POST["name"];
  //   $senderEmail = $_POST["email"];
  //   $senderTel = $_POST["tel"];
  //   $message = $_POST["message"];

  //   // Build the email content using a template
  //   $emailTemplate = "
  //     Hello,

  //     Someone has just contacted you. Here are the details:

  //     Name: $senderName
  //     Email: $senderEmail
  //     Phone: $senderTel

  //     Message:
  //     $message
  //   ";

  //   // Send the email
  //   $mailReturn = mail($recipientEmail, $subject, $emailTemplate,"");

  // }

  // header("Location:../pages/contact.html");
