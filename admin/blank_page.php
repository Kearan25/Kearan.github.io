<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Admin - Stone Ecclesiastical</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
   

   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet"></head>

  <body>

<!-- Menu Starts Hee -->
    <nav class="navbar navbar-inverse navbar-static-top"  >
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              </div>
              <a class="navbar-brand" href="index.php"><img src="../images/stone_logo.png" height="100%" alt="Stone Ecclesiastical Logo"> </a>
                 <div id="navbar" class="navbar-collapse collapse">
                        
              <ul class="nav navbar-nav navbar-right">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../about.php">About Us</a></li>
                <li><a href="../services.php">Services</a></li>
                <li><a href="../contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>  <!-- End of Menu -->


    <div class="container">

<!--  THIS IS WHERE YOUR PAGE CONTENT SHOULD BE PLACED -->
    <div class="row"> 
    <h2>Admin <small>Control Panel</small></h2>    
    <p>This is a blank page you can use as a template for new pages in your admin area- just copy and rename it!</p>  
        </div>
        
        
        require_once("includes/connect.php");

$input_username = $_POST["username"];
$input_password = md5(hash("sha512",$_POST["password"]);
echo "your new username is: " . $input_username;
echo "your new password is: " . $input_password;

$query = "INSERT INTO `unit27`.`t_users` (`UID`, `Username`, `Password`, `Timestamp`) VALUES (NULL, '$input_username', '$input_password', CURRENT_TIMESTAMP)";

$run = mysqli_query($connect,$query);

echo " record added";
        
        
        
<!-- //END OF YOUR PAGE CONTENT -->
      
    </div> <!-- /container -->
    
    
    
    
    

  <footer class="footer">
      <div class="container">
         <p class="pull-right"><a href="#">Back to top</a></p>
             <p class="text-muted">&copy; 2015 Stone Ecclesiastical &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a> &middot; <a href="../admin/">Admin</a>.</p>
     
      </div>
    </footer>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
