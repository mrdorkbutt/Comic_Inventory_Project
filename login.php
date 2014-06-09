  
  <?php
if ($_POST ){
    $form_data = $_POST;
    print_r( $form_data );
    
	$username = $_POST[ 'username' ];
$password = $_POST[ 'password' ];
var_dump($_POST);
	require_once "comicinventory_connect.php";
 	$db = comicinventorydb_connect();

$sql = "SELECT * FROM user WHERE username=:username";

$query = $db->prepare( $sql );
$query->execute( array( ':username'=>$username ) );
$results = $query->fetchAll( PDO::FETCH_ASSOC ); 

foreach( $results as $row ){ 
    $password_hash = $row[ 'password' ];
    print_r( $password_hash );
}

include ( 'PasswordHash.php' );

$hash_obj = new PasswordHash( 8, false );
$check = $hash_obj->CheckPassword( $password, $stored_hash );

if ( $check ){
   print_r( "This is a valid user" );
} else {
   print_r( "Authentication failed, please Try again.");
}


}	?>

	
	
	//do login stuff
} else { 
	?>

   
   <form class="navbar-form navbar-right" role="form" name="login" action="login.php" method="POST">
            <div class="form-group">
              <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
}
