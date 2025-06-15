<?php

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

header('Content-Type: application/json');

if (!empty($_POST)) {

    // Honeypot
    if (!empty($_POST['website'])) {
        echo json_encode(['status' => 'captcha']);
        exit;
    }

    // reCAPTCHA
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
        $message = htmlspecialchars($_POST["message"]);

        $emailTemplate = "
            Hello,

            Someone has just contacted you. Here are the details:

            Name: $senderName
            Email: $senderEmail
            Phone: $senderTel

            Message:
            $message
        ";

        $headers = "From: $senderName <$senderEmail>" . "\r\n" .
                   "Reply-To: $senderEmail" . "\r\n" .
                   "Content-Type: text/plain; charset=utf-8";

        $mailReturn = mail($recipientEmail, $subject, $emailTemplate, $headers);

        if ($mailReturn) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error']);
        }

    } else {
        echo json_encode(['status' => 'captcha']);
    }

} else {
    echo json_encode(['status' => 'error']);
}
