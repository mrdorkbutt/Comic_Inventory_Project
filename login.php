<?php
$_SESSION['user'] = $_POST['user'];

if (isset($_SESSION['logged-in'])) {
 print_r( "Welcome User");
 

} else {
 echo "<form class='navbar-form navbar-right' role='form' name='login' method='POST'>";
       echo "<div class='form-group'>";
         echo " <input type='text' name='username' class='form-control'>";
          echo '</div>';
          echo '<div class="form-group">';
           echo "<input type='password' name='password' placeholder='Password' class='form-control'>";
          echo "</div>";
          echo "<button type='submit' class='btn btn-success'>Sign in</button>";
         echo "</form>";
}

?>

  
  <?php


 
if ($_POST ){
    $form_data = $_POST;
   // print_r( $form_data );
    
	$username = $_POST[ 'username' ];
$password = $_POST[ 'password' ];
//var_dump($_POST);
	require_once "comicinventory_connect.php";
 	$db = comicinventorydb_connect();

$sql = "SELECT * FROM user WHERE username=:username";

$query = $db->prepare( $sql );
$query->execute( array( ':username'=>$username ) );
$results = $query->fetchAll( PDO::FETCH_ASSOC ); 

foreach( $results as $row ){ 
   $password_hash = $row[ 'password' ];
//    print_r( $password_hash );
}

include ( 'PasswordHash.php' );

$hash_obj = new PasswordHash( 8, false );
$stored_hash = $password_hash;
$check = $hash_obj->CheckPassword( $password, $stored_hash );

if ( $check ){
   print_r( "This is a valid user" );
} else {
   print_r( "Authentication failed, please Try again.");
}


}	?>

	
	

   
 
