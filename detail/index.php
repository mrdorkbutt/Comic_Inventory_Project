<html>
<head>
<title> Inventory Test </title>

</head>

<body>
 
  

<?php

include "database_config.php";

//SQL query
$strSQL = "SELECT * From series ORDER BY title";


// Execute the Query
$rs = mysql_query($strSQL);

// Loop the recordset $rs
// Each row will be made into an array ($row) using mysql_fetch_array
while($row = mysql_fetch_array($rs)) {
	
	// Write the value of the column FirstName (which is now in the array $row)
	echo $row['title']  . " - " . $row['publisher']  . "<br />" ;



}




<<<<<<< HEAD
	   // Create a link to series.php with the id-value in the URL
	   $strLink = "<a href = 'series.php?id= " . $row['id'] . "'>" . $strName . "</a>";

=======
// close the database connection
mysql_close();
?>
>>>>>>> a274890c775a342327f18a8c4cd5ef24b46d61ce



</body>


</html>
