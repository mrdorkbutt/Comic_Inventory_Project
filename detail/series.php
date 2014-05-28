<html>
	<head>
	<title>Detail Page</title>
	</head>
	<body>

	<ul>

	<?php
	
	include "../database_config.php";

	// Get data from the database depending on the value of the id in the URL
	$strSQL = "SELECT * FROM series WHERE id=" . $_GET["id"];
	$rs = mysql_query($strSQL);
	
	// Loop the recordset $rs
	while($row = mysql_fetch_array($rs)) {

		// Write the data of the person
		echo "<table>";
		echo "<tr>";
		echo "<td>Title:</td><td>" . $row["title"] . "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Publisher:</td><td>" . $row["publisher"] . "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>ID:</td><td>" . $row["id"] . "</td>";
		echo "</tr>";
		echo "</table>";
	}

	// Close the database connection
	mysql_close();
	?>

	</dl>
	<p><a href="index.php">Return to the list</a></p>

	</body>

	</html>

	