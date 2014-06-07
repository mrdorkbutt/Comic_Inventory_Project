  
  <?php
if ($_POST ){
    $form_data = $_POST;
    print_r( $form_data );
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
     