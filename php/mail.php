<?php

require __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Chargement des variables d'environnement
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

header('Content-Type: application/json');

// Vérifie que des données ont bien été postées
if (!empty($_POST)) {

    // Honeypot anti-bot
    if (!empty($_POST['website'])) {
        echo json_encode(['status' => 'captcha']);
        exit;
    }

    // Vérification reCAPTCHA
    $recaptchaSecret = $_ENV['RECAPTCHA_SECRET_KEY'];
    $recaptchaToken = $_POST['recaptcha_token'];

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $recaptchaSecret,
        'response' => $recaptchaToken
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $verifyResponse = curl_exec($ch);
    curl_close($ch);

    $responseData = json_decode($verifyResponse);

    if ($responseData->success && $responseData->score >= 0.5) {

        $recipientEmail = "diegnavpro@gmail.com";
        $subject = htmlspecialchars($_POST["subject"]);
        $senderName = htmlspecialchars($_POST["name"]);
        $senderEmail = htmlspecialchars($_POST["email"]);
        $senderTel = htmlspecialchars($_POST["tel"]);
        $message = nl2br(htmlspecialchars($_POST["message"]));

        // Template HTML avec le header et logo
        $emailBody = "
            <div style='font-family: Arial, sans-serif; color: #333; line-height: 1.5; max-width:600px; margin:auto; border:1px solid #ddd;'>
                <div style='background-color:#000; padding:20px; text-align:center;'>
                    <img src='https://www.diegonavarro.fr/portfolio/images/Diego-logo-black-header.png' alt='Diego Navarro' style='max-height:60px;'>
                </div>

                <div style='padding:20px;'>
                    <h2 style='color: #222;'>New Contact Request</h2>
                    <p><strong>Name:</strong> {$senderName}</p>
                    <p><strong>Email:</strong> <a href='mailto:{$senderEmail}'>{$senderEmail}</a></p>
                    <p><strong>Phone:</strong> {$senderTel}</p>
                    <p><strong>Message:</strong><br>{$message}</p>
                    <hr style='margin-top:30px;'>
                    <p style='font-size: 12px; color: #777;'>Portfolio contact form - diegonavarro.fr</p>
                </div>
            </div>
        ";

        // Envoi via Brevo SMTP (PHPMailer)
        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp-relay.brevo.com';
            $mail->SMTPAuth   = true;
            $mail->AuthType   = 'LOGIN';
            $mail->Username   = '8fbc38001@smtp-brevo.com';
            $mail->Password   = $_ENV['BREVO_SMTP_KEY'];
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            $mail->setFrom('contact@diegonavarro.fr', 'Portfolio Contact');
            $mail->addAddress($recipientEmail, 'Diego Navarro');

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $emailBody;

            $mail->AltBody = "Name: {$senderName}\nEmail: {$senderEmail}\nPhone: {$senderTel}\nMessage:\n" . strip_tags($message);

            $mail->send();
            echo json_encode(['status' => 'success']);

        } catch (Exception $e) {
            error_log("Mailer Error: " . $mail->ErrorInfo);
            echo json_encode(['status' => 'error']);
        }

    } else {
        echo json_encode(['status' => 'captcha']);
    }

} else {
    echo json_encode(['status' => 'error']);
}
