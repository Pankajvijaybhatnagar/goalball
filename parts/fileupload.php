<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Set upload directory
$uploadDir = "uploads/";

// Make sure the upload directory exists
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

$response = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];

    // Check for upload errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
        $response = [
            "success" => false,
            "message" => "File upload error: " . $file['error']
        ];
        echo json_encode($response);
        exit;
    }

    // Sanitize original filename
    $originalName = basename($file['name']);
    $extension = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));

    // Allow only certain file types (images only)
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    if (!in_array($extension, $allowedTypes)) {
        $response = [
            "success" => false,
            "message" => "Invalid file type. Only JPG, PNG, GIF, and WEBP allowed."
        ];
        echo json_encode($response);
        exit;
    }

    // Generate a unique name
    $newFileName = uniqid("img_", true) . '.' . $extension;
    $destination = $uploadDir . $newFileName;

    // Move the uploaded file
    if (move_uploaded_file($file['tmp_name'], $destination)) {
        $response = [
            "success" => true,
            "filename" => $newFileName,
            "message" => "File uploaded successfully."
        ];
    } else {
        $response = [
            "success" => false,
            "message" => "Failed to move uploaded file."
        ];
    }
} else {
    $response = [
        "success" => false,
        "message" => "No file uploaded or invalid request."
    ];
}

echo json_encode($response);