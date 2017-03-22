<?php

if($_SERVER['HTTP_USER_AGENT'] == "admin"){
	?>
	<b>Flag : 67895456789098_Us3r4_G3nt3dit3d_678987</b>
	<?php
}
else{
	?>
	<h1>Accès restreint a l'admin</h1>
	<p>Vous etes : <?php echo $_SERVER['HTTP_USER_AGENT']; ?> nous cherchons admin.</p>
	<?php
}


?>
