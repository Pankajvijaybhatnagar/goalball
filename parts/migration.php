<?php
include_once ('_db.php');

$sql = "CREATE TABLE IF NOT EXISTS events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    place TEXT NOT NULL,
    from_date DATE NOT NULL,
    to_date DATE NOT NULL,
    featured_image VARCHAR(255),
    image_folder_name VARCHAR(255),
    slug VARCHAR(255) UNIQUE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'events' created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}
?>