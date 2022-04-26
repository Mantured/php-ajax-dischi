<?php 

include_once __DIR__ . '/../database/db.php';

$species = [];

foreach($characters as $character) {
    if (!in_array(strtolower($character['species']), $species)){
        $species[] = strtolower($character['species']);
    }
}

header('Content-Type: application/json');
echo json_encode($species);

?>