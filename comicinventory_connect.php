<?php
# pdo_comicinventory_connect.php - function for connecting to the "inventory database

function comicinventorydb_connect ()
{

	$dsn = new enru\DsnFromEnv();
	$dsn_string = $dsn->parse();



	try {
	    $dsn = new enru\DsnFromEnv();
	    $dbh = new PDO($dsn->parse());
	}   
	catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
	} 

	return ($dbh);

}
?>
