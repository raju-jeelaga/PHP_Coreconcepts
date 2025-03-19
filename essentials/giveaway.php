<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body>
<pre><?php

$names = [
    'Emily Johnson',
    'Michael Smith',
    'Sarah Williams',
    'James Brown',
    'Jennifer Davis',
    'William Miller',
];

$nam = count($names);
$rand = rand(0, $nam - 1);
//var_dump($names[$rand]);
echo "The Winner is {$names[$rand]}";

$productCategories = array('Electronics', 'Fashion', 'Home & Garden', 'Toys', 'Sports');
 
$productCategories[2] = 'Kitchenware';
unset($productCategories[3]);
$productCategories[6] = 'Automotive';

var_dump($productCategories);


$scores = array(78, 90, 65, 88, 90, 75);
sort($scores);
 
if ($scores[0] < 70) {
    echo 'Lowest score is below 70!';
} else if ($scores[0] === 70) {
    echo 'Lowest score is 70!';
} else {
    echo 'All scores are above 70!';
}


?></pre>
</body>
</html>