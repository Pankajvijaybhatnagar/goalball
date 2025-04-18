<?php
header('Content-Type: application/json');

// Get POST data
$folder = isset($_POST['folder']) ? rtrim($_POST['folder'], '/') . '/' : null;
$start = isset($_POST['start']) ? intval($_POST['start']) : 0;
$limit = isset($_POST['limit']) ? intval($_POST['limit']) : null;

// Valid image extensions
$image_extensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];

// Validate folder parameter
if (!$folder || !is_dir("../uploads/".$folder)) {
    echo json_encode([
        'error' => 'Valid folder path must be provided.',
        'rolder'=>$folder;
    ]);
    exit;
}

// Scan the folder
$files = scandir("../uploads/".$folder);
$images = [];

// Filter image files
foreach ($files as $file) {
    $path = $folder . $file;
    $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    if (is_file($path) && in_array($extension, $image_extensions)) {
        $images[] = $file;
    }
}

// Sort and slice images
sort($images);
$selected_images = array_slice($images, $start, $limit);

// Return JSON response
echo json_encode([
    'folder' => $folder,
    'start' => $start,
    'limit' => $limit,
    'total' => count($images),
    'images' => $selected_images
]);
?>
