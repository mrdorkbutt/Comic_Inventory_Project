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

	
	
	// Write the value of the column FirstName (which is now in the array $row)
	

echo "<table border=1 cellpadding=1>"; 
 echo "<tr>"; 
  echo "<th>Title:</th>";
  echo "<th>Publisher:</th>";
 echo "</tr>"; 
 
while ($rs = $sth->fetch(PDO::FETCH_OBJ)){
 

 echo "<tr>"; 
 echo "<td>".$rs->title."</td> "; 
 echo "<td>".$rs->publisher."</td></tr>"; 
 } 
 echo "</table>"; 



// close the database connection
$dbh = NULL;

?>


</body>


</html>
