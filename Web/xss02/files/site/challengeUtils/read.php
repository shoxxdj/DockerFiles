<html>
<head>
</head>
<body>

<?php
	$pdo = new PDO('sqlite:'.dirname(__FILE__).'/database.sqlite');
	$read = $pdo->query('select message,id from messages where view=0 ORDER BY id LIMIT 1');
	
	while($r=$read->fetch()){
?>
	<p><?php echo $r['message']; ?></p>
<?php	
	$req=$pdo->query("update messages set view=1 where id=".$r['id']);
	}
?>

<?php
	$del=$pdo->query("delete from 'messages' where view=1");
?>

</body>
</html>
