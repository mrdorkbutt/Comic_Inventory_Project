<?php
# pdo_comicinventory_connect.php - function for connecting to the "inventory database

function comicinventorydb_connect ()
{

  $corey = True; // Set this to True for Corey and False for Mark

  $password = "";

  if (!$corey) 
    {
      $password="mysql"; 
    }



	$dbh = new PDO("mysql:host=localhost;dbname=cjenkins_1_comicinventory.db", "root", $password);
	return ($dbh);
}
?>