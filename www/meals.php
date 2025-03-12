<?php
require 'database.php';


$apiUrl = "https://www.themealdb.com/api/json/v1/1/search.php?s=pasta"; // Pas dit aan naar je behoefte
$response = file_get_contents($apiUrl);
$data = json_decode($response, true);

if ($data && isset($data['meals'])) {
    echo json_encode($data['meals']); // Geeft de opgehaalde data terug als JSON
} else {
    echo json_encode(["error" => "Geen maaltijden gevonden"]);
}
?>