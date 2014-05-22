<html>
	<head>
	<title>Retrieve detailed data from the database</title>
	</head>
	<body>

	<ul>

	<?php
	// Connect to database server
	mysql_connect("localhost", "root", "") or die (mysql_error ());

	// Select database
	mysql_select_db("cjenkins_1_comicinventory.db") or die (mysql_error ());

	// SQL query
	$strSQL = "SELECT * From series ORDER BY title";

	// Execute the query (the recordset $rs contains the result)
	$rs = mysql_query($strSQL);
	
	// Loop the recordset $rs
	while($row = mysql_fetch_array($rs)) {

	   // Name of the person
	  $strName = $row['title'];

	   // Create a link to series.php with the id-value in the URL
	   $strLink = "<a href = 'series.php?id = " . $row['id'] . "'>" . $strName . "</a>";

	    // List link
	   echo "<li>" . $strLink . "</li>";

	  }

	// Close the database connection
	mysql_close();
	?>

	</ul>
	</body>
	</html>

	