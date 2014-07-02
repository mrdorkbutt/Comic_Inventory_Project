<?php
# pdo_comicinventory_connect.php - function for connecting to the "inventory database

function comicinventorydb_connect ()
{
  include(".database.config");

  $corey = True; // Set this to True for Corey and False for Mark

  $password = "";

  if (!$corey) 
    {
      $password="mysql"; 
    }


   $db =null;
   try {
    $dbh = new PDO($db_url, $username, $password );
    echo "PDO connection object created";
    }
   catch(PDOException $e)
    {
    echo $e->getMessage();
    }
	return ($dbh);
}
?>
