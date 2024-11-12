<?php
header('Content-Type: application/json');

// Set language, defaulting to Hindi if not provided
$language = isset($_GET['lang']) ? $_GET['lang'] : 'hi';

// Build URL for API request
$url = "https://$language.wikipedia.org/w/api.php?action=query&list=recentchanges&rcprop=title|user|timestamp|comment&rclimit=10&format=json";

try {
    // Initialize a cURL session
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Set timeout

    // Execute the request
    $response = curl_exec($ch);

    // Check if the cURL request failed
    if (curl_errno($ch)) {
        throw new Exception("cURL Error: " . curl_error($ch));
    }

    // Check the HTTP response code
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpCode != 200) {
        throw new Exception("HTTP Error: Received response code $httpCode from Wikipedia API.");
    }

    // Close the cURL session
    curl_close($ch);

    // Decode JSON response
    $data = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception("Error decoding JSON response: " . json_last_error_msg());
    }

    // Send the data back to the client
    echo json_encode($data);
} catch (Exception $e) {
    // Send error message as JSON with debug info
    echo json_encode(["error" => $e->getMessage()]);
}
?>
