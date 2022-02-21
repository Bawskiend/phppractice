<?php
    $url = $_SERVER['REQUEST_URI'];
	$url = preg_replace('#/#','\\',$url);
	echo $url;
    $layout = file_get_contents('layout.php');
    $content = file_get_contents('.' . $url);
    $layout = str_replace('{{ content }}', $content, $layout);
    
    echo $layout;
?> 
<meta charset="UTF-8">
<!DOCTYPE html>
