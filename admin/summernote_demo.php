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
    <link href="../css/font-awesome.min.css" rel="stylesheet">
   <link href="../css/summernote.css" rel="stylesheet">

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
    <h2>Admin <small>Summernote</small></h2>    
    <p class="lead">Summernote is a simple, open source WYSIWYG text editor that can be used to edit the content of any website element (eg Div).</p>  
        
    <h3>Demo:</h3>
        <div class="panel panel-default">
  <div class="panel-body">
      <!-- DEMO Summernote HTML -->
      <form method="post" action="my_page_name.php">
<textarea name="summernote" class="summernote"  >
<h1>Hello</h1>
<p>I'm some text</p>
</textarea>
          <button type="submit" class="btn">Submit</button>
     </form>
      <!-- End of Demo -->
            </div>
        </div>
        
        <h3>Instructions</h3>
        <p>First you must include the summernote Javascript and CSS Files in your page. Remember, your CSS is at the top of your site in the <code>head</code> section, and your Javasctipt should be located at the very bottom of your site.  Allways add your scripts <code>below</code> any existing css or javascript.</p>
        <pre><code>  &lt;link href="../css/summernote.css" rel="stylesheet"&gt;</code></pre>
        <pre><code>   &lt;script src="../js/summernote.min.js"&gt;&lt;/script&gt;</code></pre>
        <p>You also need the fontawesome icons:</p>
        <pre><code>&lt;link href="../css/font-awesome.min.css" rel="stylesheet"&gt;</code></pre>
        <p>NOTE: This guide assumes you alredy have jQuery and Bootstrap included in your site. </p>
        <p>Once you have included these, you need to set the class of the div you want to edit to <code>summernote</code>. Example:</p>
        <pre><code>
&lt;form method=&quot;post&quot; action=&quot;my_page_name.php&quot;&gt;
  &lt;textarea name=&quot;summernote&quot; class=&quot;summernote&quot; &gt;
   &lt;h1&gt;Hello&lt;/h1&gt; 
   &lt;p&gt;I'm some text&lt;/p&gt; 
  &lt;/textarea&gt; 
&lt;button type=&quot;submit&quot; class=&quot;btn btn-success&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;
        </code></pre>
        <p>Finally, you need to initiate summernote using javascript. The example below will get you up and running, but there are lots of options you can configure- take a look at their website <a href="http://summernote.org/" target="_blank">summernote.org</a>.</p>
        <pre><code>
&lt;script&gt;
      $(document).ready(function() {
      $('.summernote').summernote({height: 300});
      });
&lt;/script&gt;
        </code></pre>
        <p>Thats it- summernote should be up and running.  When you are populating summernote from your text file or database you just need to change the textareas content to include your php.  Something like this should do the trick: <code>&lt;?php echo $row[&quot;page_content&quot;] ; ?&gt;</code></p>
        

        
        </div>
                
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
      <script src="../js/summernote.min.js"></script>
     <script>
             $(document).ready(function() {
$('.summernote').summernote({height: 250});
           });
      </script>
  </body>
</html>
