<html>
<head>
<title> Inventory Test </title>

</head>

<body>
 
  

<?php

include "../database_config.php";

//SQL query
$strSQL = "SELECT * From series ORDER BY title";


// Execute the Query
$rs = mysql_query($strSQL);

// Loop the recordset $rs
// Each row will be made into an array ($row) using mysql_fetch_array
while($row = mysql_fetch_array($rs)) {
	

	   // Create a link to series.php with the id-value in the URL
	   $strLink = "<a href='series.php?id=" . $row['id'] . "'>" . $strName . "</a>";
}
// close the database connection
mysql_close();
?>



</body>


</html>
