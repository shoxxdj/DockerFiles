<?php include('head.php');?>

<?php	session_start();
	if(isset($_SESSION['user'])){ ?>
		<?php if($_SESSION['user']=="admin"){?>
			<b>Felicitation le flag est : 78986567898767890_Insecurit1_8987890</b>
		<?php } ?>
		<a href="/changepassword.php">Changer mon mot de passe</a>
		<a href="/disconnect.php">Deconnexion</a>
<?php	}else{?>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="row">
			<div class="col-md-6">
			<h1>S'enregistrer</h1>
				<form class="form" method="post" action="/register.php">
					<div class="form-group">
						<input type="text" name="login" class="form-control" placeholder="Login"/>
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password"/>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-block">S'enregistrer</button>
					</div>		
				</form>
			</div>
			<div class="col-md-6">
			<h1>Se Logger</h1>
				<form class="form" method="post" action="/login.php">
					<div class="form-group">
						<input type="text" class="form-control" name="login" placeholder="Login"/>
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password"/>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-block">Se logger</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<?php 
	if(isset($_GET['status'])){
		if($_GET['status']==1){
		?>
			<h1>Vous pouvez vous connecter !</h1>
		<?php
		}
		if($_GET['status']==2){
		?>
			<h1>Vous avez été déconnecté !</h1>
		<?php
		}
	}
?>
