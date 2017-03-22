<h1>Upload V1</h1>
<?php
if (isset($_FILES['uploaded'])) {
	$html="";
	$target_path = "/var/www/html/uploads/";
	$target_path = $target_path . basename($_FILES['uploaded']['name']);
	$uploaded_name = $_FILES['uploaded']['name'];
	$uploaded_type = $_FILES['uploaded']['type'];
	$uploaded_size = $_FILES['uploaded']['size'];
	if (($uploaded_type == "image/jpeg") && ($uploaded_size < 100000)){
		if(!move_uploaded_file($_FILES['uploaded']['tmp_name'], $target_path)) {
			$html .= '<pre>';
			$html .= 'Your image was not uploaded.';
			$html .= '</pre>';
		} else {
			$html .= '<pre>';
			$html .= $target_path . ' succesfully uploaded!';
			$html .= '</pre>';
		}
	}
	else{
		echo '<pre>Your image was not uploaded.</pre>';
	}
	echo $html;
}
?>
<form enctype="multipart/form-data" action="#" method="POST" />
	<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
	Choose an image to upload:
	<br />
	<input name="uploaded" type="file" /><br />
	<br />
	<input type="submit" name="Upload" value="Upload" />
</form>

