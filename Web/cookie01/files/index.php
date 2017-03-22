<?php
	function setUserCookie($name, $value) {
	    $date = date("D, d M Y H:i:s",strtotime('1 January 2015')) . 'GMT';
	    header("Set-Cookie: {$name}={$value}; EXPIRES{$date};");
	}
?>
<html>
<head></head>
	<body>
		<center>
		<h1>Cette zone est restreinte aux admins ! </h1>
			<form method="post" action>
				<input type="password" name="password"/>
				<input type="submit" value="Login !"/>
			</form>
		</center>
		<?php

			if(!isset($_COOKIE['status'])){
				setUserCookie("status","utilisateur");
			}

			

			if(substr(strtolower($_COOKIE['status']),0,5)=="admin"){
				?>
				<p>Felicitation vous pouvez valider avec ce flag : <b> VDqFEIgzbcbke9rhx_C00k1eB4sIcs0lv3d_JL9Pt85bZVhRWLOsoJog </b></p>
				<?php
			}
			?> <!-- vos cookies : <?php print_r($_COOKIE); ?> -->
	</body>
</html>