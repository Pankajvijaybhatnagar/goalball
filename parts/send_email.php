<?php
// send_email.php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer and the config
require_once 'vendor/autoload.php';  // Adjust the path if necessary
$config = require('config.php');     // Include the configuration file

/**
 * Function to send an email
 * @param string $message - The message to be sent in the email body
 * @param string $fname - The sender's full name (optional)
 * @param string $email - The sender's email address (optional)
 * @param string $mobile - The sender's mobile number (optional)
 * @param string $city_state - The sender's city & state (optional)
 * @param string $inquiry_type - The type of inquiry (optional)
 * @param string $declaration - Whether the sender agrees to be contacted (optional)
 * @return array - Success or error message
 */
function send_email($message, $fname = '', $email = '', $mobile = '', $city_state = '', $inquiry_type = '', $declaration = 'No') {
    global $config; // Access global config array

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                        // Send using SMTP
        $mail->Host       = $config['host'];                     // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                // Enable SMTP authentication
        $mail->Username   = $config['username'];                 // SMTP username
        $mail->Password   = $config['password'];                 // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      // Enable TLS encryption
        $mail->Port       = $config['port'];                     // TCP port to connect to

        // Recipients
        $mail->setFrom($config['from_email'], $config['from_name']);
        $mail->addAddress($config['to_email'], 'Recipient Name');  // Add a recipient (e.g., admin)

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Inquiry from ' . ($fname ? $fname : 'Anonymous');
        $mail->Body    = "<h3>New Inquiry Submission</h3>
                          <p><strong>Full Name:</strong> $fname</p>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Mobile Number:</strong> $mobile</p>
                          <p><strong>City & State:</strong> $city_state</p>
                          <p><strong>Inquiry Type:</strong> $inquiry_type</p>
                          <p><strong>Message:</strong> $message</p>
                          <p><strong>Agree to Contact:</strong> $declaration</p>";

        // Send the email
        if ($mail->send()) {
            return ['status' => 'success', 'message' => 'Inquiry sent successfully!'];
        } else {
            return ['status' => 'error', 'message' => 'Mailer Error: ' . $mail->ErrorInfo];
        }
    } catch (Exception $e) {
        return ['status' => 'error', 'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo];
    }
}

// If the script is called directly via POST request (form submission)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Extract form data from POST (optional)
    $fname = isset($_POST['fname']) ? htmlspecialchars($_POST['fname']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $mobile = isset($_POST['mobile']) ? htmlspecialchars($_POST['mobile']) : '';
    $city_state = isset($_POST['city_state']) ? htmlspecialchars($_POST['city_state']) : '';
    $inquiry_type = isset($_POST['inquiry_type']) ? htmlspecialchars($_POST['inquiry_type']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
    $declaration = isset($_POST['declaration']) ? $_POST['declaration'] : 'No';

    // Call the send_email function to send the email
    $response = send_email($message, $fname, $email, $mobile, $city_state, $inquiry_type, $declaration);

    // Return JSON response
    echo json_encode($response);
}
?>
