<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
    <style> h1 { width: 20rem; height: 10rem; background: red; }</style>
</head>
<body>
    <?php
        $pageTitle = " PHP Learning Skills";

        //$pageTitle = "";

        if(isset($pageTitle) && $pageTitle !== ""){
            echo "<h1>{$pageTitle}</h1>";
        } else {
            echo "No title";
        }

        if(!empty($pageTitle)){
            echo "<h1>{$pageTitle}</h1>";
        }

    ?>
    <style>
        h1{
            background:blue;
            width:300px;
            height:100px;
        }
    </style>
</body>
</html>