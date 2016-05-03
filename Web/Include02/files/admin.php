<?php
	$pass="535227947722506168_f1leInclud3B4siC_Pwned_722506168554070016";
	if(isset($_POST['passwd'])){
		if($_POST['passwd'] == $pass){
			?>
		<h1 style="color:black">Felicitation vous pouvez valider le challenge avec ce mot de passe comme flag</h1>
			<?php
		}else{
		?>
			<form method="POST" action>
				<input type="password" name="passwd"/>
				<input type="submit" value="login"/>
			</form>
		<?php
		}	
	} else {
		?>

		<form method="POST" action>
			<input type="password" name="passwd"/>
			<input type="submit" value="login"/>
		</form>

		<?php
	}

?>
