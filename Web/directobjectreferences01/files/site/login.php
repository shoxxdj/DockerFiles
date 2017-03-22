
<?php
	session_start();
$connect=mysql_connect('localhost','challenge','challenge');
mysql_select_db('challengeSQL',$connect);

$query=sprintf("SELECT * from users WHERE login = '%s' AND password = '%s'",
		$_POST['login'],$_POST['password']);
	$sqlQuery=mysql_query($query);
	if(@mysql_num_rows($sqlQuery) == 1){
		$_SESSION['user']=$_POST['login'];
	}
header('location:/');


?>

