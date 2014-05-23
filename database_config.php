<?php
  $corey = False;

  $password = "";

  if (!$corey) 
    {
      $password="mysql"; 
    }

  // Connect to database server
  mysql_connect("localhost", "root", $password) or die (mysql_error ());

  //select database
  mysql_select_db("cjenkins_1_comicinventory.db") or die (mysql_error ());

?>

