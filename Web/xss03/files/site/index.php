<!DOCTYPE html>
<html>
<head>
	<title>XSS v0.02</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="admin/">Admin</a></li>
        <li><a href="index.php">Contact</a></li>
      </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Information</h3>
	  </div>
	  <div class="panel-body">
	    Notre site est down, seule la partie administrative est accessible. Nous ne pouvons le réparer rapidement, mais les administrateurs sont toujours à votre écoute.
	  </div>
	</div>



<?php
	function xssSanitizer($input){
		$input = strtolower($input);
		$input = str_replace("script","",$input);
		$input = str_replace("img","",$input);
		$input = str_replace("src","", $input);
		return $input;
	}



	if(isset($_POST['message'])){
		    $pdo = new PDO('sqlite:'.dirname(__FILE__).'/challengeUtils/database.sqlite');
		    $req = $pdo->prepare("INSERT INTO messages (message,view) VALUES (:message,0)");			
		    $message = xssSanitizer($_POST['message']);
		    $pouet = $req->execute(array('message'=>$message));
		    ?>
		    	<div class="alert alert-success" role="alert">
				  Message envoyé ! Un admin consultera ce dernier d'ici <b>Une minute maximum</b>
				</div>
		    <?php
	}

?>
		<form method="POST" action>
		<div class="form-group">
			<textarea class="form-control" rows="10" name="message"></textarea>
		</div>
		<div class="form-group">
			 <button type="submit" class="btn btn-default">Submit</button>
		</div>
		</form>
	</div>
</div>
</body>
</html>
