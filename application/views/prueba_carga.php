<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo base_url()?>upload/cargar" method="post" enctype="multipart/form-data">
		<input type="text" name="nombre">
		<label for="file">Examinar:</label>
		<input type="file" name="fotos[]" id="file" multiple=''><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>