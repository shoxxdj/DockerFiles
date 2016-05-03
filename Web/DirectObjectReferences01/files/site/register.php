
<?php if(isset($_POST['login']) && isset($_POST['password']) && $_POST['login']!="admin"){
	$connect=mysql_connect('localhost','challenge','challenge');
	mysql_select_db('challengeSQL',$connect);

	$query=sprintf("INSERT INTO users (login,password) VALUES ('%s','%s')",
		$_POST['login'],$_POST['password']);
	$sqlQuery=mysql_query($query);
	header('location:/?status=1');
} ?>

