<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Web App</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
      
  </head>
  <body>
    <?php include "navheader.html" ?>
    
    <div class="collapse" id="logCardCollapse">
        <div class="card card-block" id="migraineBlock">
            <!--//load content dynamically using jquery-->
        </div>
    </div>
    <div class="collapse" id="aboutCardCollapse">
        <div class="card card-block" id="aboutBlock">
            <!--load content dynamically using jquery-->
        </div>
    </div>          
  </body>
</html>