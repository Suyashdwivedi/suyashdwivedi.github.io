<?php
header('Content-Type: application/json');

// Fetch edit count from Hindi Wikipedia API
$url = 'https://hi.wikipedia.org/w/api.php?action=query&format=json&meta=siteinfo&siprop=statistics&origin=*';

$response = file_get_contents($url);
$data = json_decode($response, true);

// Check if the response contains the edit count
if (isset($data['query']['statistics']['edits'])) {
    $editCount = $data['query']['statistics']['edits'];
} else {
    $editCount = 0; // Default to 0 if not found
}

// Return the edit count as JSON
echo json_encode(['editCount' => $editCount]);
?>
