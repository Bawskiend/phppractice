<?php
    $url = $_SERVER['REQUEST_URI'];
	$path = 'view' . $url . '.php';
	
	if (file_exists($path)) {
		$content = file_get_contents($path);
	} else {
		header('HTTP/1.0 404 Not Found');
		$content = file_get_contents('view/404.php');
	}
	$layout  = file_get_contents('layout.php');
	
	$layout = str_replace('{{ content }}', $content, $layout);
	
	echo $layout;
?> 
<meta charset="UTF-8">
