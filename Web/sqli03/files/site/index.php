<?php
	$authent= FALSE;	

	if(isset($_POST['login']) && isset($_POST['password'])){

		$connect=mysql_connect('localhost','challenge','challenge');
		mysql_select_db('challengeSQL',$connect);

		$query=sprintf("SELECT * from users WHERE login = '%s' AND password = MD5('%s')",
			$_POST['login'],$_POST['password']);
		echo "<!--";
		print_r($query);
		echo "-->";
		$sqlQuery=mysql_query($query);
		if(@mysql_num_rows($sqlQuery) == 1){
			$authent = TRUE;
		}
	}	
?>

<html>
	<head>
		<title>Ethical Hacking - Challenge</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
			<?php if($authent){	?>
				<p>Felicitation le flag de validation est : <b>Le password de l'admin</b> </p>
			<?php }else{ ?>
				<h1>Interface d'administration</h1>
				<form method="POST" action>
					 <div class="form-group">
					    <label for="login">Login</label>
					    <input type="text" class="form-control" id="login" name="login" placeholder="John Doe">
					  </div>
					  <div class="form-group">
					    <label for="password">Password</label>
					    <input type="password" class="form-control" id="password" name="password" 
placeholder="EthicalHacking">
					  </div>
					  <div class="form-group">
					  <input type="submit" class="btn btn-default" value="Connexion"/>				
				</form>
			<?php } ?>
			</div>
		</div>
 	</body>
</html>


