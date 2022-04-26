<?php 

include_once __DIR__ . '/../database/db.php';
header('Content-Type: application/json');

/* intanto facciamolo secco */
/* http://localhost/php-ajax-dischi/server/controller.php */
echo json_encode(
    [
        'results' => $characters,
        'length' => $characters,
    ]
)

/* lo scopo di controller é di esporre i dati del db tramite js, fa da ponte */
?>
