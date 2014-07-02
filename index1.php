<html>
<head>
<title>Inventory with detail page in PDO</title>

</head>

<body>
 
  <ul>

<?php
// Connect to database server
require_once "connect.php";
$dbh = db_connect();

/* Execute a prepared statement by passing an array of values */
try {
    $sql = "SELECT * FROM type ORDER BY issuetype";
    foreach ($dbh->query($sql) as $row)
        {
           print $row['id'] .' - '. $row['issuetype'] . '<br />';
        }

} catch(PDOException $e) { 
    echo $e->getMessage();
}


	
// close the database connection
$dbh = NULL;

?>
	</ul>


</body>
</html>
