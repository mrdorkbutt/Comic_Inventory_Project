<?php

function db_connect ()
{


	try {
	    $dbh = new PDO( db_string() );
	    print "got it";
	}   
	catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
	} 

	return ($dbh);

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
