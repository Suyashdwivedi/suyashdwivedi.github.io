<?php

// Define the URL for the Wikipedia API
$apiUrl = "https://en.wikipedia.org/w/api.php?action=query&list=recentchanges&rclimit=10&format=json&origin=*";

// Define the path to the text file
$filePath = "http://wiki.free.nf/1.txt";

// Function to fetch the edit count from Wikipedia API
function fetchEditCount($url) {
    $response = file_get_contents($url);
    if ($response === FALSE) {
        return null; // Handle errors if the API call fails
    }
    
    $data = json_decode($response, true);
    if (isset($data['query']['recentchanges'])) {
        return count($data['query']['recentchanges']); // Return the count of recent changes
    }
    
    return null; // Return null if the expected data is not found
}

// Infinite loop to update the edit count every 10 seconds
while (true) {
    $editCount = fetchEditCount($apiUrl);
    
    if ($editCount !== null) {
        // Update the text file with the new edit count
        file_put_contents($filePath, $editCount);
    }
    
    // Sleep for 10 seconds
    sleep(10);
}
?>
