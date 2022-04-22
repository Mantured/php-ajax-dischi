<?php 

include_once __DIR__ . '/data.php';
header('Content-Type: application/json');

/* intanto facciamolo secco */
/* http://localhost/php-ajax-dischi/server/controller.php */
echo json_encode(
    [
        'results' => $characters,
        'length' => $characters,
    ]
)

?>