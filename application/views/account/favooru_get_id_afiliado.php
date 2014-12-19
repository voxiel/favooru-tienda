<!DOCTYPE html>
<html>
<head>
  <?php echo $this->load->view('head', array('title' => lang('product_page_name'))); ?>
</head>
<body>

<?php echo $this->load->view('header'); ?>

<div class="container">
  <div class="row">
    <div class="span10">
      <h2>Captura de id afiliado</h2>

      <!--<?php echo $error;?>-->
       <br>
       <h3> ID AFILIADO: </h3> 
       <h2>
          <?php echo $id_afiliado; ?> 
       </h2>

    </div>


  </div>
</div>

<?php echo $this->load->view('footer'); ?>

</body>
</html>