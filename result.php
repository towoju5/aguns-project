<?php
use PHPMailer\PHPMailer\PHPMailer;

// Load Composer's autoloader
require 'vendor/autoload.php';
require_once 'crud_functions.php';

try {
    // Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    $request = (object) $_REQUEST;
    $output = "";
    $details = null;

    if (isset($request->id) && !empty($request->id)) {
        $details = getCard($request->id);
        if ($details) {
            $output .= "Card type => " . $details['card_name'] . "<br>\n\n";
            unset($_REQUEST['id']);
        }
    }

    // if (strtoupper($_SERVER["REQUEST_METHOD"]) === "POST") {
        foreach ($_REQUEST as $key => $value) {
            $output .= $key . " => " . $value . "<br>\n\n";; 
        }

        // var_dump($output);exit;

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.example.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'user@example.com';
            $mail->Password = 'secret';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // TLS OR SSL
            $mail->Port = 465; // 465 or 587

            // Recipients
            $mail->setFrom('from@example.com', 'Aguns Mailer');
            $mail->addAddress('joe@example.net');

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New form Input';
            $mail->Body = $output;
            $mail->AltBody = $output;

            $mail->send();
            // echo 'Message has been sent';
        } catch (\Exception $e) {
            error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
    // }

    if (!function_exists('restKey')) {
        function restKey($key)
        {
            $newKey = str_replace("_", " ", $key);
            return $newKey;
        }
    }

} catch (\Throwable $th) {
    error_log("Message could not be sent. Mailer Error: {$th->getMessage()}");
}
