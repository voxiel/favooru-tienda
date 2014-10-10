<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sale</title>
</head>
<body>
<?php echo form_open('validation/jquery_save', array('id'=>'frm')); ?>

<div id="validation-error"></div>

<h5>Username</h5>
<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50">

<h5>Password</h5>
<input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50">

<h5>Password Confirm</h5>
<input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50">

<h5>Email Address</h5>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50">

<div><input type="submit" value="Submit"></div>

</form>
   <script src="<?php echo base_url().RES_DIR; ?>/front-end/js/jquery-1.11.0.js"></script>
<script>
	$(document).ready(function() {
$('#frm').submit(function(){
	
	$.post($('#frm').attr('action'), $('#frm').serialize(), function( data ) {
	if(data.st == 0)
		{
		 $('#validation-error').html(data.msg);
		}
				
		if(data.errors == 0)
		{
		  $('#validation-error').html('la mano arriba');
		}
				
	}, 'json');
	return false;			
   });

	
});
</script>
</body>
</html>