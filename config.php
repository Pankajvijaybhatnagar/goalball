<?php
// config.php

require_once 'vendor/autoload.php';  // Autoload PHPMailer and other packages
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();  // Load environment variables from .env

// Get PHPMailer configuration from environment variables
$mailConfig = [
    'host' => getenv('SMTP_HOST'),
    'username' => getenv('SMTP_USERNAME'),
    'password' => getenv('SMTP_PASSWORD'),
    'port' => getenv('SMTP_PORT'),
    'from_email' => getenv('SMTP_FROM_EMAIL'),
    'from_name' => getenv('SMTP_FROM_NAME'),
    'to_email' => getenv('SMTP_TO_EMAIL'),
    'db_host' => getenv('DB_HOST'),
    'db_username' => getenv('DB_USERNAME'),
    'db_password' => getenv('DB_PASSWORD'),
    'db_database' => getenv('DB_DATABASE'),
];

var_dump($mailConfig);


return $mailConfig;
