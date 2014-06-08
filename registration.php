<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    
    <title>Registration Page</title>

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
  
  
 
<?php include 'login.php';?>

          
          
             </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Account Registration</h1>
        <p>&nbsp;</p>



<?php
if ( empty( $_POST) ) {
	?>

<form name="registration" method="post">
<label for 'username'>Username: </label>
<input type="text" name="username"/><br>

<label for 'password'>Password: </label>
<input type="password" name="password"/><br>

<label for 'first_name'>First Name: </label>
<input type="text" name="first_name"/><br>

<label for 'surname'>Last Name: </label>
<input type="text" name="surname"/><br>

<label for 'email'>Email: </label>
<input type="text" name="email"/><br><br>
    
   <p><button type="submit" class="btn btn-primary btn-lg" role="button">Register</button></p>
    </form>
    <?php
} else {
	require_once "comicinventory_connect.php";
	include ( 'PasswordHash.php' );
 	$db = comicinventorydb_connect();
	
	$form = $_POST;
	$username = $form[ 'username' ];
	$password = $form[ 'password' ];	
	$first_name = $form[ 'first_name' ];
	$surname = $form[ 'surname' ];
	$email = $form[ 'email' ];	

	$password = $_POST[ 'password' ];
	$hash_obj = new PasswordHash( 8, false );
	$hash = $hash_obj->HashPassword( $password );

	$sql  = "INSERT INTO user ( username, password, first_name, surname, email ) VALUES ( :username, :password, :first_name, :surname, :email)";
	//echo "<pre>$sql</pre></br>";

	$query = $db->prepare( $sql );
	$result = $query->execute( array( ':username'=>$username, ':password'=>$password, ':first_name'=>$first_name, ':surname'=>$surname, ':email'=>$email )	 );

	
	if ( $result ) {
		echo "<p>Thank you. You have been registered</p>";
	} else {
		echo "<p>Sorry, there has been a problem inserting your details. Please try again.</p>";
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
     <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>

