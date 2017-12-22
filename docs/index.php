	<!DOCTYPE html>
	<html>
	<head>
		<title>My page</title>
	</head>
	<body>
		<header style="color: orange; font-family:TimesNewRoman">
			<?php
echo htmlspecialchars($_GET["msg"]);
?>
		</header>
		<h1>Hi!</h1>
		<p>
			Welcome!
		</p>
	</body>
	</html>
