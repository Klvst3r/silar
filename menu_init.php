<!DOCTYPE html>
<html lang="en">
  <head>
    <?php session_start(); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Login</title>

    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Se incluye la referencia CSS de la libreria overHang.js -->
    <link rel="stylesheet" type="text/css" href="assets/css/overhang.min.css" />
      

  </head>

  <body>

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="logout.php">Salir</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Principal</a></li>
            <?php //if(!isset($_SESSION["usuario"])){ ?>
            <li><a href="login.php"><!-- Login --></a></li>
            <li><a href="registro.php"><!-- Registro --></a></li>
            <?php// }else{ ?> 
            <?php// if($_SESSION["usuario"]["privilegio"] == 1) { ?>
            <li><a href="admin.php"><!-- Admin --></a></li>
            <?php //} else { ?>
            <!-- <li><a href="logout.php">Salir</a></li> -->
            <?php/*
             } 
           }*/
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

	<div class="starter-template">
		<br/>
		<br/>
		<br/>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
						
							<legend>Información</legend>
														
						
							
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>

</div><!-- /.container -->


<script src="js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="js/jquery-3.4.1.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>