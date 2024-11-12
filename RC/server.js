const express = require('express');
const fetch = require('node-fetch');
const path = require('path');

const app = express();
const PORT = process.env.PORT || 3000;

// Serve static files (HTML, CSS, JS) from the 'public' folder
app.use(express.static(path.join(__dirname, 'public')));

// API route to get recent changes from Wikipedia
app.get('/api/recent-changes', async (req, res) => {
    const language = req.query.language || 'en'; // Default to English if no language is provided
    const url = `https://${language}.wikipedia.org/w/api.php?action=query&list=recentchanges&format=json&rcprop=title|ids|timestamp|user&rcshow=minor&rcnamespace=0&rclimit=10`;

    try {
        const response = await fetch(url);
        const data = await response.json();
        res.json(data.query.recentchanges);
    } catch (error) {
        console.error('Error fetching recent changes:', error);
        res.status(500).send('Error fetching recent changes');
    }
});

// Serve the index.html page at the root of the site
app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'public', 'index.html'));
});

// Start the server
app.listen(PORT, () => {
    console.log(`Server running at http://localhost:${PORT}`);
});
