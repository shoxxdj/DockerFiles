<?php
		$connect=mysql_connect('localhost','challenge','challenge');
		mysql_select_db('challengeSQL',$connect);
?>

<html>
	<head>
		<title>Ethical Hacking - Challenge</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
			<?php 
				if(isset($_GET['id']) && $_GET['id']!=''){
					$id=$_GET['id'];
					$query="Select title,content from articles where id = '$id'";
					$sqlQuery=mysql_query($query) or die('<pre>'.mysql_error().'</pre>');

		                $num = mysql_numrows($sqlQuery);
					    $i = 0; 
					    while ($i < $num) { 
					        $title = mysql_result($sqlQuery,$i,"title"); 
					        $content = mysql_result($sqlQuery,$i,"content");			         
					        echo "<h1>$title</h1><p>$content</p>"; 
					        $i++; 
					    } 
				}
				else{
					$query="Select id,title from articles";
					$sqlQuery=mysql_query($query) or die('<pre>'.mysql_error().'</pre>');
	                $num = mysql_numrows($sqlQuery); 
					    $i = 0; 
					?>
						<ul>
					<?php	
					    while ($i < $num) { 
					        $id = mysql_result($sqlQuery,$i,"id"); 
					        $title = mysql_result($sqlQuery,$i,"title");	
	         
					        echo "<li><a href='/index.php?id=".$id."'>".$title."</a></p>"; 
					        $i++; 
					    } 
					?>
						</ul>
					<?php
				}
			?>
		</div>
 	</body>
</html>
