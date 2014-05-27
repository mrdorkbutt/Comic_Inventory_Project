<html>
<head>
<title>Inventory Test in PDO</title>

</head>

<body>
 
  

<?php
// Connect to database server
require_once "comicinventory_connect.php";
$dbh = comicinventorydb_connect();


//SQL query
$sth = $dbh->query ("SELECT * From series ORDER BY title");


// Execute the Query
$sth->execute();

// Loop the recordset $rs
// Each row will be made into an array ($row) using mysql_fetch_array

while ($rs = $sth->fetch(PDO::FETCH_OBJ)){
	// Write the value of the column FirstName (which is now in the array $row)

echo "Title: ".$rs->title."<br>";
echo "Publisher: ".$rs->publisher."<br>";
}

// close the database connection
$dbh = NULL;

?>



</body>


</html>
