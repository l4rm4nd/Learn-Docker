<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Docker Nginx + PHP Example</title>
</head>
<body>
<h2>Docker Compose + External Nginx & PHP + HTML/PHP Code Bind Mount</h2>
<span>We succesfully use external `nginx:stable-alpine` and `php:8-fpm-alpine` images and bind mount our own HTML/PHP code into the running containers. Using Docker Compose YAML definitions. Via custom Nginx/PHP configs, we define when the PHP container shall be used for PHP interpretion.</span>

<?php

phpinfo();

?>
</body>
</html>
