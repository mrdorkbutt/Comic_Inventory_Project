<html>
<head>
<title>Inventory with detail page in PDO</title>

</head>

<body>
 
  <ul>

<?php
// Connect to database server
require_once "comicinventory_connect.php";
$dbh = comicinventorydb_connect();


//SQL query
//$sth = $dbh->query ("SELECT * From series ORDER BY title");



/* Execute a prepared statement by passing an array of values */
try {
	$sth = $dbh->query('SELECT * FROM type ORDER BY issuetype');
	$sth->execute();
} catch(PDOException $e) { 
    echo $e->getMessage();
}


// Execute the Query

// Loop the recordset $rs
// Each row will be made into an array ($row) using mysql_fetch_array

while ($rs = $sth->fetch(PDO::FETCH_OBJ)){
	// Write the value of the column FirstName (which is now in the array $row)

// this is the problem area - Corey

	   // Create a link to series.php with the id-value in the URL

	
	 $strLink = "<a href='series.php?id=".$rs->id."'>" .$rs->issuetype. "</a>";

	    // List link
	   
	
 echo "<li>" .$strLink . "</li>";

}

	
// close the database connection
$dbh = NULL;

?>
	</ul>


</body>
</html>
