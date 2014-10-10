<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sale</title>
</head>
<body>
	<?php echo $producto;
		$attributes = array('class' => 'email', 'id' => 'myform');
		echo form_open('/', $attributes);
		echo form_input('username', 'Nombres');
		echo form_input('username', 'Apellidos');
		echo form_input('username', 'Edad');
		echo form_submit('mysubmit', 'Generar Código');
	echo form_close(); ?>
</body>
</html>