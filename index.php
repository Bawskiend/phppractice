<?php
    $url = $_SERVER['REQUEST_URI'];
    $path = 'php' . $url . '.php';
    $path = str_replace('\\','./',$path);
    if(file_exists($path)){
        $layout = file_get_contents('php\layout.php');
        $content = file_get_contents($path);
        $layout = str_replace('{{ content }}', $content, $layout);    
        echo $layout;
        }
    else{
        $layout = file_get_contents('php\layout.php');
        $content = file_get_contents('php\404.php');
        $layout = str_replace('{{ content }}', $content, $layout);
        echo $layout;
    }
        ?> 
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/style.css">
            <title>Document</title>
        </head>
        <body>
            
        </body>
        </html>