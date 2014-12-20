<!DOCTYPE html>
<html>
<head>
  <?php echo $this->load->view('head', array('title' => lang('product_page_name'))); ?>
</head>
<script type="text/javascript">

    $(document).on('ready', function() {
      $('.alertas').hide();
      $('.spin').hide();
      $('.spin').spin('hide');

      $('#upload_form').on('submit', function(e){
        //recibe un objeto de json con las configuraciones y propiedades
        e.preventDefault(); //evita que el formulario recarge la pagina 

        var url = "";
        //Obtencion de la metadata del archivo
        var formObj = $(this);
        var formURL = formObj.attr("action");
        var formData = new FormData(this);

        $.ajax({
          //url: base_url +'index.php/upload/do_upload',
          beforeSend: function(){//funcion que se ejecutara antes de enviar una peticion
            $('.wrapper-spin').show();
            $('.spin').show();
            $('.spin').spin('show');

          },
          url: formURL,
          type:'POST',
          data:  formData,
          mimeType:"multipart/form-data",
          contentType: false,
          cache: false,
          processData:false,
          dataType:'json',          
          success: function(data){  //funcion que se ejecutara cuando el servidor de una respuesta
            $('.spin').spin('hide');
            $('.wrapper-spin').hide();
            console.log(data);
            if (!data.error) {
              console.log('guardado con exito!');
              $('.notificacion').hide();
              $('.notificacion').html('<div class="alert alert-success" role="alert"> Archivo guardado con exito! </div>');
              $('.notificacion').fadeIn('slow', function(){
                $(this).delay(2000).fadeOut('slow');
              });
            }else{
              console.log('ocurrio un error al guardar');
              $('.notificacion').hide();
              $('.notificacion').html('<div class="alert alert-danger" role="alert"> Error al guardar archivo! </div>');
              $('.notificacion').fadeIn('slow', function(){
                $(this).delay(2000).fadeOut('slow');
              });
            }
          },
          error: function(jqXHR, estado, error){ //en caso de error, se ejecuta esto 
            $('.spin').spin('hide');
            $('.wrapper-spin').hide();
            console.log(jqXHR);
            console.log(error);
            console.log(estado);
            console.log('ocurrio un error al guardar');
              $('.notificacion').hide();
              $('.notificacion').html('<div class="alert alert-danger" role="alert"> Error al guardar archivo! </div>');
              $('.notificacion').fadeIn('slow', function(){
                $(this).delay(2000).fadeOut('slow');
              });
          },
          complete: function(jqXHR, estado){ //siempre se ejecuta independientemente si fue un success o error 
              console.log(estado);
          }
        }); 
      });//del form 
      
    });//del document ready
</script>
<body>

<?php echo $this->load->view('header'); ?>

<div class="container">
  <div class="row">

    <div class="span2">
      <?php echo $this->load->view('account/account_menu', array('current' => 'manage_cargar_accesos')); ?>
    </div>
    <div class="span10">
      <h2>Cargar Accesos</h2>
      <div class="well">
        Seleccionar el archivo *.csv con los accesos
      </div>
      <!--<?php echo $error;?>-->

<form id="upload_form" name="myform" action="<?php echo site_url("/upload/upload_access");?>" enctype="multipart/form-data">
  <input type="file" name="userfile" size="20"/>  
  <br /><br />
  <input type="submit" value="upload" class="btn btn-success"/>
</form>

<div class="notificacion"></div>

<div class="alertas"></div>

<div class="row row-centered">
  <div class="wrapper-spin col-centered">
    <div class="spin"/>  
  </div>
</div>
  
</div>

    </div>
  </div>
</div>

<?php echo $this->load->view('footer'); ?>

</body>
</html>