<?php

session_start();
include 'database.php';

if(isset($_SESSION['user'])!="")
{
  header("Location: chat.php");
}

if(isset($_POST['register']))
{
  $email = mysql_real_escape_string($_POST['email']);
  $upass = mysql_real_escape_string($_POST['pass']);
  
  $email = trim($email);
  $upass = trim($upass);

  $query = "SELECT user_id, username, password FROM users WHERE email='$email'";

  $result = $con->query($query);
  $row = $result->fetch_array();
  
  $count = mysql_num_rows($result); 
  
  if($count == 1 && $row['user_pass']==md5($upass))
  {
    $_SESSION['user'] = $row['user_id'];
    header("Location: chat.php");
  }
  else
  {
    ?>
        <script>alert('Please check the username / password');</script>
        <?php
  }
  
}

// print_r($con);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smiggle Chat</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document" onload="ajax();">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Smiggle Chat</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="chat.php">Chat</a></li>
            <li><a href="#contact">List all people</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>User registration</h1>
        <p>Please register to be able to login and start Smiggling.</p>

        <center>
            <div id="register-form">
                <form method="post">
                    <table align="center" width="50%" border="0">
                        <tr>
                            <td><input type="text" name="email" placeholder="Your Email" required /></td>
                        </tr>
                        <tr>
                            <td><input type="password" name="pass" placeholder="Your Password" required /></td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="register">LogIn</button></td>
                        </tr>
                        <tr>
                            <td><a href="register.php">Register for an account</a></td>
                        </tr>
                    </table>
                </form>
            </div>
        </center>
      </div>

      
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
