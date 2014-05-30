<html>
<head>
<title> Inventory Test </title>

</head>

<body>
<!-- is this workin g-->
<?php

  include "../database_config.php";

//SQL query



$strSQL = "SELECT * FROM type INNER JOIN series ON type.id = series.issue_type_id"; 

// Execute the Query
$rs = mysql_query($strSQL);

// Loop the recordset $rs
// Each row will be made into an array ($row) using mysql_fetch_array

	
	// Write the value of the column FirstName (which is now in the array $row)
	

echo "<table border=1 cellpadding=1>"; 
 echo "<tr>"; 
  echo "<th>Title:</th>";
  echo "<th>Publisher:</th>";
  echo "<th>Type:</th>";
 echo "</tr>"; 
 
  while ($row = mysql_fetch_array($rs,MYSQL_ASSOC))
 { 

 echo "<tr>"; 
 echo "<td>".$row['title'] . "</td> "; 
 echo "<td>".$row['publisher'] . " </td>";
 echo "<td>".$row['issue_type_id'] . " </td>"; 

 } 
 echo "</table>"; 






// close the database connection
mysql_close();
?>



</body>


</html>
