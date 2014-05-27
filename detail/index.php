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




// close the database connection
mysql_close();
?>



</body>


</html>
