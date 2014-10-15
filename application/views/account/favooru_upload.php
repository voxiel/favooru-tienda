<!DOCTYPE html>
<html>
<head>
  <?php echo $this->load->view('head', array('title' => lang('product_page_name'))); ?>
</head>
<script type="text/javascript">

    $(document).on('ready', function() {
      $('#upload_form').on('submit', function(e){
        //recibe un objeto de json con las configuraciones y propiedades
        e.preventDefault(); //evita que el formulario recarge la pagina 

        var url = "";
        //Obtencion de la metadata del archivo
        var formObj = $(this);
        var formURL = formObj.attr("action");
        var formData = new FormData(this);

        console.log($(this).serialize());

        $.ajax({
          //url: base_url +'index.php/upload/do_upload',
          url: formURL,
          type:'POST',
          data:  formData,
          mimeType:"multipart/form-data",
          contentType: false,
          cache: false,
          processData:false,
          success: function(info){  //funcion que se ejecutara cuando el servidor de una respuesta
            console.log(info);      //info son los datos que devuelve el servidor
          },
          error: function(jqXHR, estado, error){ //en caso de error, se ejecuta esto 
            console.log(error);
            console.log(estado);
          },
          complete: function(jqXHR, estado){ //siempre se ejecuta independientemente si fue un success o error 
              console.log(estado);
          },
          timeout: 10000 //tiempo maximo de espera por la peticion
        }); 
      });//del form 
      
   
      /*$('#upload_form').bind('submit', function(event) {
        $.post($('#upload_form').attr('action'), $('#upload_form').serialize(), function( data ) {
                console.log(data);
        }, 'json');
        return false;           
        });
      */  
    });//del document ready


</script>
<body>

<?php echo $this->load->view('header'); ?>

<div class="container">
  <div class="row">

    <div class="span2">
      <?php echo $this->load->view('account/account_menu', array('current' => 'manage_cargar_datos')); ?>
    </div>
  
    <div class="span10">
      <h2>Cargar Datos de Tigo Money</h2>

      <div class="alert alert-success" role="alert"> Archivo guardado con exito! </div>

      <div class="well">
        Seleccionar el archivo *.csv provisto por Tigo Money
      </div>
      <!--<?php echo $error;?>-->

<!--
	<?php echo form_open_multipart('upload/do_upload', array('id'=>'upload_form'));?>

	<input type="file" name="userfile" size="20"/>

	<br /><br />

	<input type="submit" value="upload" class="btn btn-success"/>

	</form>
-->

<form id="upload_form" name="myform" action="<?php echo site_url("/upload/do_upload");?>" enctype="multipart/form-data">
  
  <input type="file" name="userfile" size="20"/>  
  <br /><br />
  <input type="submit" value="upload" class="btn btn-success"/>

</form>
      
    </div>
  </div>
</div>

<?php echo $this->load->view('footer'); ?>

</body>
</html>
