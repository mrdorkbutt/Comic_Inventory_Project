<?php
  $corey = True; // Set this to True for Corey and False for Mark

  $password = "";

  if (!$corey) 
    {
      $password="mysql"; 
    }

  // Connect to database server
  mysql_connect("localhost", "root", $password) or die (mysql_error ());

  //select database
  mysql_select_db("comics") or die (mysql_error ());

?>

