<?php

require 'mailer/PHPMailer.php';
require 'mailer/Exception.php';
require 'mailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * Sends an OTP email using PHPMailer.
 *
 * @param string $emailTo Recipient's email address.
 * @param string $otp The OTP to send.
 * @return array Response containing status, message, and code.
 */
function sendEmail(string $emailTo, string $body): array {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'demo@gieogita.org.uk';
        $mail->Password = 'GieoGita@2022';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender's email
        $mail->setFrom('demo@gieogita.org.uk', 'GIEO Gita UK');
        $mail->addAddress($emailTo);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Form Response';
        $mail->Body    = "$body";

        // Send the email
        $mail->send();

        return [
            'status' => 'success',
            'message' => 'OTP has been sent to your email.',
            'code' => 200
        ];
    } catch (Exception $e) {
        echo  "<pre>";
        print_r($e);
        return [
            'status' => 'error',
            'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}",
            'code' => 500
        ];
    }
}

// Set up the allowed origins
$allowedOrigins = [
    'http://localhost',
    'http://127.0.0.1',
    'http://localhost:8000',
    'http://127.0.0.1:8000',
];

// Check for CORS and set headers
$origin = $_SERVER['HTTP_ORIGIN'] ?? '';

// Handle OPTIONS request (preflight request for CORS)
// if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
//     exit;
// }

// if ($_SERVER['REQUEST_METHOD'] != 'POST') {
//     echo json_encode(['status' => 'error', 'message' => 'Invalid request method', 'code' => 403]);
//     exit;
// }


// Call the function to send the email
$method =  $_SERVER['REQUEST_METHOD'];
if($method=='POST'){
  $data = json_decode(file_get_contents('php://input'), true);
  $emailTo = $data['email'] ?? null;
  $body = $data['body'] ?? null;
  if(!$emailTo || !$body) {
      echo json_encode(['status' => 'error', 'message' => 'Email or body is missing', 'code' => 400, 'data' => $data]);
      exit;
  }
  $response = sendEmail($emailTo, $body);
  echo json_encode($response);
  exit; 
}

// sendEmail("ankitbkana@outlook.com", "test body");