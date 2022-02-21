<?php
    error_reporting(E_ALL);
    $url = $_SERVER['REQUEST_URI'];
	$url = preg_replace('#/#','\\',$url);
    $url = '.' . $url;
    if(file_exists($url)){
    $layout = file_get_contents('layout.php');
    $content = file_get_contents($url);
    $layout = str_replace('{{ content }}', $content, $layout);
    echo $layout;
    }
    elseif(!file_exists($url)){
        $content = file_get_contents('view/404.php');
        $layout = file_get_contents('layout.php');
        $layout = str_replace('{{ content }}', $content, $layout);
        echo $layout;
    }
    
?> 
<meta charset="UTF-8">
<!DOCTYPE html>
