<html>
<head>
<title>Custom PHP</title>
</head>
<body>
<h1>I am a local and persisted <span style=color:red>HTML+PHP</span> file.</h1>
<h2>I will be included in Docker containers at runtime.</h2>

<h3>If everything works fine, I will print my Linux user ID below:</h3>	
	<?php 
	$userInfo = system('id');
    echo htmlspecialchars($userInfo);
	?>
</body>
</html>
