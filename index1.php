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
	$strLink = "<a href='series.php?id=".$rs['id']."'>" .$rs['name']. "</a>";
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


<?php


function connect() {
        $dbh = null;
        try {
            $dbh = new PDO( db_string() );
        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
	return $dbh;
}




function db_string() {
         $db = parse_url(getenv('DATABASE_URL'));
            
            // get the DB name
            $path = ltrim($db['path'], '/');
            $db['dbname'] = $path;

            // we gotta password?
            if(isset($db['pass'])) {
                $db['password'] = $db['pass'];
            }

            // schemes map
            $schemes = array(
                'postgres' => 'pgsql',
                'postgresql' => 'pgsql',
            );

            // set & remap the scheme
            $scheme = $db['scheme'];
            if(isset($schemes[$scheme])) {
                $scheme = $schemes[$scheme];
            }
            
            // clear unneeded values
            unset($db['pass']);
            unset($db['path']);
            unset($db['scheme']);

            return $scheme.':'.http_build_query($db, null, ';');

}




?>
