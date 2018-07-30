<!DOCTYPE html> 
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="app/_css/main.css?v=1">
	<link rel="stylesheet" href="app/_css/css/fontello.css">
	<link rel="stylesheet" href="app/_css/libs.min.css">
	<script type="text/javascript" src="app/_js/libs.min.js"></script>
  	<script type="text/javascript" src="app/_js/script.js"></script>
</head>
<body>
<?php
    require_once "_php/user.php";
    $obj = new user("nick", "password");

    echo "<pre>";
    print_r($obj);
    echo "</pre>";
    
    $object = serialize($obj);
    
    echo "<pre>";
    print_r($object);
    echo "</pre>";
    
    try {
	$object2 = unserialize($object);
    
    echo "<pre>";
	print_r($object2);
	echo "</pre>";} catch ( Exeption $e )
	{
		echo "Исключение: $e";
	}

?>
</body>
</html>
