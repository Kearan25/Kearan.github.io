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
    <?php
require_once("connect.php");
$querry = "SELECT * FROM `t_users` ";
$run = mysqli_query($connect,$querry) or die(mysqli_error());


/*while ($result = mysqli_fetch_assoc($run))
{
  echo "Username: ".$result["Username"];
  echo " Password: ".$result["Password"];
  echo "<br>";
}
*/
?>

<table class="table" border="1">
<thead>
    <tr>
    <th>User ID</th>
    <th>Username</th>
    <th>Password</th>
    <th>delete</th>
    </tr>
</thead>
<tbody>
<?php
 while ($result = mysqli_fetch_assoc($run))
{
  echo "<tr>";
  echo "<td>".$result["UID"]."</td>";
  echo "<td>".$result["Username"]."</td>";
  echo "<td>".$result["Password"]."</td>";
  echo "<td>"."<a href='delete.php?ID=".$result["UID"]." '> ✖ </a></td>"; 
  echo "</tr>";
}
?>
</tbody>

</table>

<a href="delete.php?ID=1"></a>
        
        

        
        
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
