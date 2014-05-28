<?php
# pdo_comicinventory_connect.php - function for connecting to the "inventory database

function comicinventorydb_connect ()
{
	$dbh = new PDO("mysql:host=localhost;dbname=cjenkins_1_comicinventory.db", "root", "");
	return ($dbh);
}
?>