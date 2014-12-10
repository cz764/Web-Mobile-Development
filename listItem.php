<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>list items</title>
</head>
<?php
require 'https://github.com/bobthecow/mustache.php/blob/master/src/Mustache/Autoloader.php';
Mustache_Autoloader::register();

$m = new Mustache_Engine;
echo $m->render('Hello {{planet}}', array('planet' => 'World!')); // "Hello World!"

?>

<body>
</body>
</html>