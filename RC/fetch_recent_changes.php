<?php
header('Content-Type: application/json');

// Set language, defaulting to Hindi if not provided
$language = isset($_GET['lang']) ? $_GET['lang'] : 'hi';

// Build URL for API request
$url = "https://$language.wikipedia.org/w/api.php?action=query&list=recentchanges&rcprop=title|user|timestamp|comment&rclimit=10&format=json";

try {
    // Fetch data from Wikipedia API
    $response = file_get_contents($url);
    if ($response === false) {
        throw new Exception("Failed to fetch data.");
    }

    // Decode JSON response
    $data = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception("Error decoding JSON response.");
    }

    // Send the data back to the client
    echo json_encode($data);
} catch (Exception $e) {
    // Send error message as JSON
    echo json_encode(["error" => $e->getMessage()]);
}
?>
