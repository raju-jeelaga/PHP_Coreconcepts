<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body>
<pre>
    <?php
        $categories = [
            'Programming',
            'Business', 
            'Art & Drawing', 
            'Self improvement', 
            'History',
        ];
        
        foreach($categories as $category){
            var_dump($category);
            if($category === "History"){
                echo "This was Working as Excepted";
            }
        }


    ?>
</pre>
    <ul>
        <?php foreach($categories as $category): ?>
            <li><?php echo $category; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>