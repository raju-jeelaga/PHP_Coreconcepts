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

$categories = ['Programming', 'Business', 'Art & Drawing', 'Self improvment', 'History'];

var_dump(count($categories));

echo $categories[3];

$categories[99] = "Hello World";

echo '<br>';

// if(in_array('Art & Drawing', $categories)){
//     echo "Art & Drawing is in the array \n";
// }

// var_dump(isset($categories[99]));
// var_dump(empty($categories[99]));

echo '<br>';

var_dump($categories);
var_dump($categories[99]);

?></pre>
</body>
</html>