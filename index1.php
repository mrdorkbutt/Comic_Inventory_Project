<?php
include_once("connect.php");
?>
<html>
<head>
<title>Inventory with detail page in PDO</title>

</head>

<body>
 
  <ul>

<?php
	$dbh = connect();

/* Execute a prepared statement by passing an array of values */
try {
    $sql = "SELECT * FROM type";
    foreach ($dbh->query($sql) as $row)
        {
	$strLink = "<a href='series.php?id=".$row['id']."'>" .$row['name']. "</a>";
	 echo "<li>" .$strLink . "</li>";
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

