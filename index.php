<?php
    $url = $_SERVER['REQUEST_URI'];
	
    $layout  = file_get_contents('index.php');
    $content = file_get_contents('view' . $url . '.php');
    
    $layout = str_replace('{{ content }}', $content, $layout);
    
    echo $layout;
?> 
<meta charset="UTF-8">
<!DOCTYPE html>
<html>
	<head>
		<title>title</title>
	</head>
	<body>
		<header>
			header
		</header>
		<main>
			{{ content }}
		</main>
		<header>
			footer
		</header>
	</body>
</html>