<html>
	<head>
	<title>Detail Page</title>
	</head>
	<body>

	<ul>

	<?php
	// Connect to database server
	mysql_connect("localhost", "root", "") or die (mysql_error ());

	// Select database
	mysql_select_db("cjenkins_1_comicinventory.db") or die (mysql_error ());

	// Get data from the database depending on the value of the id in the URL
	$strSQL = "SELECT * FROM series WHERE id=" . $_GET["id"];
	$rs = mysql_query($strSQL);
	
	// Loop the recordset $rs
	while($row = mysql_fetch_array($rs)) {

		// Write the data of the person
		echo "<dt>Title:</dt><dd>" . $row["title"] . "</dd>";
		echo "<dt>Publisher:</dt><dd>" . $row["publisher"] . "</dd>";
		echo "<dt>ID:</dt><dd>" . $row["id"] . "</dd>";

	}

	// Close the database connection
	mysql_close();
	?>

	</dl>
	<p><a href="index.php">Return to the list</a></p>

	</body>

	</html>

	