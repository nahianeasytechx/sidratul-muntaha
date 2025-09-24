<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header('Cache-Control: no-cache, no-store, must-revalidate'); // Prevent caching
header('Pragma: no-cache'); // HTTP 1.0
header('Expires: 0'); // Proxies

$allowed_origins = [
    "",
    ""
];

$origin = $_SERVER['HTTP_ORIGIN'] ?? '';

if (in_array($origin, $allowed_origins)) {
    header("Access-Control-Allow-Origin: $origin");
    header("Access-Control-Allow-Credentials: true"); 
}

header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

// Include database connection file
require_once '../database/dbConnection.php';

// Include functions file
include '../components/functions.php';

?>