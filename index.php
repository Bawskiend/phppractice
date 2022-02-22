<?php
    $url = $_SERVER['REQUEST_URI'];
    if(file_exists($url)){
        $url = preg_replace('#/#','',$url);
        $layout = file_get_contents('layout.php');
        $content = file_get_contents('.' . $url);
        $layout = str_replace('{{ content }}', $content, $layout);
        echo $layout;}
        elseif(!file_exists($url)){
            $layout = file_get_contents('view/404.php');
            $content = file_get_contents('index.php');
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