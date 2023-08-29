<html>
<head>
<title>Custom PHP</title>
</head>
<body>
<h1>Ich bin eine lokale, persistente <span style=color:red>HTML+PHP</span> Datei.</h1>
<h2>Ich werde zur Laufzeit in Docker Container eingebunden.</h2>
	<?php 
	$userInfo = system('id');
    echo htmlspecialchars($userInfo);
	?>
</body>
</html>
