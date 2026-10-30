<?php
// resolve.php: finds the full address behind a w.wiki short link.
// Browsers cannot do this themselves (w.wiki sends no CORS headers), so the tool asks this small script instead.
// Safe by design: it only accepts w.wiki links and only returns addresses on Wikimedia sites.
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: public, max-age=3600');
header('Access-Control-Allow-Origin: *');   // harmless: it only resolves w.wiki links to Wikimedia addresses

$u = $_GET['u'] ?? '';
if (!preg_match('~^https://w\.wiki/[A-Za-z0-9_$-]{1,20}$~', $u)) {
    http_response_code(400);
    echo json_encode(['error' => 'not a w.wiki short link']);
    exit;
}

$ch = curl_init($u);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => true,
    CURLOPT_FOLLOWLOCATION => false,   // we only want the Location header
    CURLOPT_TIMEOUT => 8,
    CURLOPT_USERAGENT => 'wiki-dyk.toolforge.org (https://meta.wikimedia.org/wiki/User:Suyash.dwivedi)',
]);
$resp = curl_exec($ch);
curl_close($ch);

if ($resp && preg_match('/^location:\s*(\S+)/im', $resp, $m)) {
    $loc = $m[1];
    $host = parse_url($loc, PHP_URL_HOST);
    $allowed = '/(^|\.)(wikipedia|wiktionary|wikibooks|wikiquote|wikisource|wikinews|wikiversity|wikivoyage|wikimedia|wikidata|mediawiki)\.org$/i';
    if (parse_url($loc, PHP_URL_SCHEME) === 'https' && $host && preg_match($allowed, $host)) {
        echo json_encode(['url' => $loc]);
        exit;
    }
}
http_response_code(404);
echo json_encode(['error' => 'could not resolve this short link']);
