<html>
<head>
<title>Inventory Join Test in PDO</title>

</head>

<body>
 
  

<?php
// Connect to database server
require_once "comicinventory_connect.php";
$dbh = comicinventorydb_connect();


//SQL query
$sth = $dbh->query ("SELECT * FROM series INNER JOIN publications ON series.id = publications.series_id");



	
// Execute the Query
$sth->execute();

// Loop the recordset $rs
// Each row will be made into an array ($row) using mysql_fetch_array

	
	
	// Write the value of the column FirstName (which is now in the array $row)
	

echo "<table border=1 cellpadding=1>"; 
 echo "<tr>"; 
  echo "<th>Title:</th>";
  echo "<th>Publisher:</th>";
  echo "<th>Issue:</th>";
  echo "<th>Price:</th>";
  echo "<th>Date:</th>";
 echo "</tr>"; 
 
while ($rs = $sth->fetch(PDO::FETCH_OBJ)){
 

 echo "<tr>"; 
 echo "<td>".$rs->title."</td> "; 
 echo "<td>".$rs->publisher."</td> "; 
 echo "<td>".$rs->issue."</td> "; 
 echo "<td>".$rs->price."</td> "; 


 echo "<td>".$rs->release_date."</td></tr>"; 
 } 
 echo "</table>"; 




// close the database connection
$dbh = NULL;

?>


</body>


</html>
