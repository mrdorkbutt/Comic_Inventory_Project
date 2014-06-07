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
        <h1>Account Details</h1>
        <p>&nbsp;</p>
<?php 
require_once "comicinventory_connect.php";
 	$db = comicinventorydb_connect();
	
    $sql = "SELECT * FROM user";
    $query = $db->prepare( $sql );
    $query->execute();
 $results = $query->fetchAll( PDO::FETCH_ASSOC );

    
	
  ?>
 <table class="table">
   <tr>
     <th>ID</th>
     <th>Username</th>
     <th>First Name</th>
     <th>Surname</th>
     <th>Email</th>
   </tr>
   <?php foreach( $results as $row ){
   echo "<tr><td>";
     echo $row['id'];
     echo "</td><td>";
     echo $row['username'];
     echo "</td><td>";
     echo $row['first_name'];
     echo "</td><td>";
     echo $row['surname'];
     echo "</td><td>";
     echo $row['email'];
     echo "</td>";
   echo "</tr>";
   }
 ?>
 </table>
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

