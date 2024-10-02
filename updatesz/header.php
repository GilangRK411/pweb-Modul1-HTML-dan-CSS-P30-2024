<!-- add <?php include "./header.html" ?> to the desired placement -->

<!DOCTYPE html>
<html>
	<head>
		<style>
body{font-family:serif; margin:0}
body > * {padding:8px 15px}
header{background:black;color:white}
nav{width: 40%; margin: 0 auto; display: flex; justify-content: center ; text-align: center}
nav > a {padding: 6px 11px; background-color: #a08450; color: #d9c9ac; text-decoration: none}
nav > a:hover {text-decoration: underline}
nav > a.selected {background-color: transparent; color: black; font-weight:bold}

		</style>
	</head>
	<body>
		<header>
			<span>OpenLibrary</span>
			<span style="float:right">Ver. 27-09-2024</span>
		</header>
		<nav>
			<a href="page1.php" class="selected">Home</a>
			<a href="search.php" class="#">Search</a>
			<a href="forum-search.php" class="#">Forum</a>
			<a href="contribute.php" class="#"><strong><u>Contribute</u></strong></a>
		</nav>
	</body>
</html>
