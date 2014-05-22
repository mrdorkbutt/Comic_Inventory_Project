<html>
<head>
<title> Inventory Test </title>

</head>

<body>

<?php
// Connect to database server
mysql_connect("localhost", "root", "") or die (mysql_error ());

//select database
mysql_select_db("cjenkins_1_comicinventory") or die (mysql_error ());

//SQL query
$strSQL = "SELECT * From series ORDER BY title";


// Execute the Query
$rs = mysql_query($strSQL);

// Loop the recordset $rs
// Each row will be made into an array ($row) using mysql_fetch_array

	
	// Write the value of the column FirstName (which is now in the array $row)
	

echo "<table border=1 cellpadding=1>"; 
 echo "<tr>"; 
  echo "<th>Title:</th>";
  echo "<th>Publisher:</th>";
 echo "</tr>"; 
 
  while ($row = mysql_fetch_array($rs,MYSQL_ASSOC))
 { 

 echo "<tr>"; 
 echo "<td>".$row['title'] . "</td> "; 
 echo "<td>".$row['publisher'] . " </td></tr>"; 
 } 
 echo "</table>"; 






// close the database connection
mysql_close();
?>



</body>


</html>
