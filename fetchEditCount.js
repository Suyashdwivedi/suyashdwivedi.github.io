const axios = require('axios');
const fs = require('fs');

const WIKI_API_URL = 'https://en.wikipedia.org/w/api.php?action=query&list=recentchanges&rclimit=10&format=json&origin=*';
const OUTPUT_FILE_URL = 'http://wiki.free.nf/1.txt';

async function fetchEditCount() {
    try {
        const response = await axios.get(WIKI_API_URL);
        const editCounts = response.data.query.recentchanges.map(change => change.edits).length;

        // Update the text file on the server
        await updateTextFile(editCounts);
    } catch (error) {
        console.error('Error fetching edit count:', error);
    }
}

async function updateTextFile(editCount) {
    try {
        await axios.post(OUTPUT_FILE_URL, `Edit Count: ${editCount}`);
        console.log(`Updated edit count: ${editCount}`);
    } catch (error) {
        console.error('Error updating text file:', error);
    }
}

// Fetch and update every 10 seconds
setInterval(fetchEditCount, 10000);
