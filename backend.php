<?php 
$database = [
    'bases' => [
       'thin',
       'deep dish',
       'stuffed crust'
   ],
    'sauces' => [
        'tomato',
        'bbq',
        'chocolate'
    ],
    'flavours' => [
        'cheese',
        'peperoni',
        'ham & pineapple',
        'chicken & bacon',
        'chocolate & candy'
    ],
    'extras' => [
       'chili oil',
       'double up',
       'olives',
       'dipping oil'
   ]
];

$query = false;

if(isset($_GET['query']) && in_array($_GET['query'], array_keys($database))) {
    $query = $_GET['query'];    
}

if (!$query) {
    http_response_code(404);
    return;
}

http_response_code(200);
echo json_encode($database[$query]);
