<?php
	require_once "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    
    <title>Add to Database</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Comic Inventory</a>
        </div>
        <div class="navbar-collapse collapse">
  
  
 
<!--?php include 'login.php';?>

          
          
             </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Site admin</h1>
        <p>&nbsp;</p>

<p>Add New Collection</p>

<?php
if ( empty( $_POST) ) {
	?>

<form name="collect" method="post">
<label for 'name'>Name: </label>
<input type="text" name="name"/><br>
    
   <p><button type="submit" class="btn btn-primary btn-lg" role="button">Submit</button></p>
    </form>
    <?php

        $dbh = connect();
	print "<ul>";

	/* Execute a prepared statement by passing an array of values */
	try {
	    $sql = "SELECT * FROM collection";
	    foreach ($dbh->query($sql) as $row)
		{
		$strLink = "<a href='collection.php?id=".$row['id']."'>" .$row['name']. "</a>";
		 echo "<li>" .$strLink . "</li>";
		}

	} catch(PDOException $e) {
	    echo $e->getMessage();
	}

	print "</ul>";

} else {
 	$db = connect();
	
	$form = $_POST;
	$name = $form[ 'name' ];
	
	
	$sql  = "INSERT INTO collection ( name ) VALUES ( :name )";
	//echo "<pre>$sql</pre></br>";

	$query = $db->prepare( $sql );
try {
	$result = $query->execute( array( ':name'=>$name )	 );

	
	if ( $result ) {
		echo "<p>Thank you. Your new collection has been added.</p>";
	} else {
		echo "<p>Sorry, there has been a problem inserting your details. Please try again.</p>";
	}
}  atch(PDOException $e) {
            echo $e->getMessage();
        }
}
	
	// Issue #6 : This should be inside the processing of the post.
	
?>
    
    
    
      </div>
    </div>


      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
  </body>
</html>

