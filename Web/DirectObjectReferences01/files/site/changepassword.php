<?php include('head.php'); ?>
<?php 
	session_start();
	if(!isset($_SESSION['user'])){
		die("Vous n'avez rien à faire ici");
	}
?>
<?php	
	if(isset($_GET['user']) && isset($_POST['password'])){

		$connect=mysql_connect('localhost','challenge','challenge');
		mysql_select_db('challengeSQL',$connect);

		$query=sprintf("UPDATE users set password = '%s' WHERE login='%s'",
			$_POST['password'],$_GET['user']);
		echo "<!--";
		print_r($query);
		echo "-->";
		$sqlQuery=mysql_query($query);
		echo "Password modifié !";
	}
?>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<form class="form" method="POST" action="/changepassword.php?user=<?php echo $_SESSION['user']; ?>">
			<div class="form-group">
				<input class="form-control" type="password" name="password"/>
			</div>	
			<div class="form-group">
				<button class="btn btn-block" type="submit">Changer mon mot de passe"</button>
			</div>
		</form>
	</div>
</div>

