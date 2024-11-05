<?php
header('Content-Type: application/json');
$apiUrl = "https://hi.wikipedia.org/w/api.php?action=query&list=recentchanges&rcprop=title|timestamp|user|comment|ids|sizes|redirect&rcshow=!bot&hidecategorization=1&hideWikibase=1&hidenewuserlog=1&rclimit=10&format=json";
echo file_get_contents($apiUrl);
?>
