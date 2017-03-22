<!DOCTYPE html>
<html>
<head>
	<title>XSS v0.01</title>
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
        <li><a href="./">Admin</a></li>
        <li><a href="../">Contact</a></li>
      </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<h3>Zone reservée aux admins</h3>
<?php
	if(isset($_COOKIE['adminCookie']) && $_COOKIE['adminCookie']=="WHNzQ2hhbGxlbmdlU2VjdXJlT3JOb3QK"){
?>
<div class="alert alert-info" role="alert">
  Felicitaiton vous pouvez valider avec le flag suivant <b>xSs1w4zs053xzY</b>
</div>
	
<?php
	}
	else if(isset($_POST['password'])){
?>
<div class="alert alert-danger" role="alert">
	<b>Wrong Password</b>
</div>
<?php
	}
	else{
?>

			<form method="post" action>
			<div class="form-group">
				<input class="form-control" type="text" name="username"/>
			</div>
			<div class="form-group">
				<input class="form-control" type="password" name="password"/>
			</div>
			<div class="form-group">
				  <button type="submit" class="btn btn-default">Submit</button>
			</div>
			</form>
		</div>
	</div>
<?php
	}
?>
</body>
</html>
