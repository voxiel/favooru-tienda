<!DOCTYPE html>
<html>
<head>
  <?php echo $this->load->view('head', array('title' => lang('product_page_name'))); ?>
</head>
<body>

<?php echo $this->load->view('header'); ?>

<div class="container">
  <div class="row">

    <div class="span2">
      <?php echo $this->load->view('account/account_menu', array('current' => 'manage_cargar_datos')); ?>
    </div>

    <div class="span10">

      <h2>Cargar Datos de Tigo Money</h2>

      <div class="well">
        Seleccionar el archivo *.csv provisto por Tigo Money
      </div>
      <!--<?php echo $error;?>-->

	<?php echo form_open_multipart('upload/do_upload');?>

	<input type="file" name="userfile" size="20" />

	<br /><br />

	<input type="submit" value="upload" class="btn btn-success"/>

	</form>
		
      
    </div>
  </div>
</div>

<?php echo $this->load->view('footer'); ?>

</body>
</html>
