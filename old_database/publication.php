<html>
	<head>
	<title>Detail Page in PDO</title>
	</head>
	<body>

	<ul>

	<?php
	// Connect to database server

	require_once "comicinventory_connect.php";
	$dbh = comicinventorydb_connect();

	// Get data from the database depending on the value of the id in the URL
	$sth = $dbh->query('SELECT * FROM series WHERE id=" . $_GET["id"]');


	// execute the query
	$sth->execute();

	// Loop the recordset $rs
	while ($rs = $sth->fetch(PDO::FETCH_OBJ)){
	
	
		// Write the data of the person
		echo "<dt>Title:</dt><dd>".$rs->title."</dd>";
		echo "<dt>Publisher:</dt><dd>".$rs->publisher."</dd>";
		echo "<dt>ID:</dt><dd>".$rs->id."</dd>";

	}

	// Close the database connection
	$dbh = NULL;
	?>

	</dl>
	<p><a href="index.php">Return to the list</a></p>

	</body>

	</html>

	
