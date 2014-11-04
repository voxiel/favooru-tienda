<!DOCTYPE html>
<html>
<head>
  <?php echo $this->load->view('head', array('title' => lang('product_page_name'))); ?>
</head>
<script type="text/javascript">

    $(document).on('ready', function() {
      $('.alertas, .alertas2').hide();

      /********************************* Proceso de los datos seleccionados*********************************************/
      $('#data-table').on('submit',function(e){
          e.preventDefault();
          var formURL =  $(this).attr("action");
          var formData = JSON.stringify(table.bootstrapTable('getSelections'))
         
          $.post(formURL, formData , function(response){
              console.log(response);
              console.log(response.num_alerts);

              if (response.error) {
                  var alertas = '<div class="alert alert-danger" role="alert"> <span class="center"><h4>¡A ocurrido un error!</h4></span><br>';
          
                  for (i = 0; i < parseInt(response.num_alerts); i++) {
                    alertas += '<p>Error al procesar el codigo: <strong>'+ response[i] + '</strong></p>';
                  }
                  alertas += '</div>';
                  $('.alertas2').html(alertas).fadeIn('slow');
              }else{
                $('.alertas2').html('<div class="alert alert-success" role="alert"> ¡   <strong>'+ response.num_inserts +'</strong> Registro(s) guardado(s) correctamente! </div>');
                $('.alertas2').fadeIn('slow', function(){
                  $(this).delay(4000).fadeOut('slow');
                });
              }
            },'json'
          );
      });


      $('#upload_form').on('submit', function(e){
        //recibe un objeto de json con las configuraciones y propiedades
        e.preventDefault(); //evita que el formulario recarge la pagina 

        $('#data-table').html('<table id="table-javascript"></table><input id="btn-procesar" type="submit" value="procesar" class="btn btn-success"/>');
        $('#btn-procesar').hide(); //se oculta el boton para procesar los datos

        var url = "";
        //Obtencion de la metadata del archivo
        var formObj = $(this);
        var formURL = formObj.attr("action");
        var formData = new FormData(this);

        $.ajax({
          //url: base_url +'index.php/upload/do_upload',
          url: formURL,
          type:'POST',
          data:  formData,
          mimeType:"multipart/form-data",
          contentType: false,
          cache: false,
          processData:false,
          dataType:'json',
          
          success: function(data){  //funcion que se ejecutara cuando el servidor de una respuesta
          
            console.log(data);

            /*******************construccion de las alertas sobre disponibilidad de contraseñas******************************/
            $('.alertas, .alertas2').hide();
            if (parseInt(data.num_alerts)!=0) {
                var alertas = '<div class="alert alert-danger" role="alert"> <span class="center"><h4>Contraseñas Insuficientes</h4></span><br>';
                //cada alerta contiene 3 mensajes
                for (i = 0; i < parseInt(data.num_alerts); i++) {
                  //console.log(data.alerts[i]);
                  alertas += '<p>El producto: <strong>'+ data.alerts[i*3] + '</strong> solicita <strong>'+ data.alerts[(i*3)+1] + '</strong> contraseñas, pero solo dispone de: <strong>' + data.alerts[(i*3)+2]+'</strong></p>';
                }
                alertas += '<h5>Por favor acceda a la sección de \'cargar contraseñas\' para solventar el problema.</h5></div>';
                $('.alertas').html(alertas);
                $('.alertas').fadeIn('slow');
            }

            if (!data.error) {
              console.log('guardado con exito!');
              $('.notificacion').hide();
              $('.notificacion').html('<div class="alert alert-success" role="alert"> Archivo guardado con exito! </div>');
              $('.notificacion').fadeIn('slow', function(){
                $(this).delay(2000).fadeOut('slow');
              });

              /********************************* creacion de la tabla ******************************************************/
                table = $('#table-javascript').bootstrapTable({
                method: 'get',
                url:  './uploads/json/'+data.json_name,
                cache: false,
                height: 500,
                striped: true,
                pagination: true,
                pageSize: 25,
                pageList: [10, 25, 50, 100, 200],
                search: true,
                showColumns: true,
                showRefresh: true,
                minimumCountColumns: 2,
                clickToSelect: true,
                columns: [{
                    field: 'state',
                    checkbox: true
                }, {
                    field: 'codTransaccion',
                    title: 'Codigo Transaccion',
                    align: 'center',
                    valign: 'center',
                    sortable: true
                }, {
                    field: 'codProducto',
                    title: 'Codigo Producto',
                    align: 'center',
                    valign: 'center',
                    sortable: true
                }, {
                    field: 'fechaPago',
                    title: 'Fecha de Pago',
                    align: 'center',
                    valign: 'center',
                    sortable: true
                }, {
                    field: 'codReferencia',
                    title: 'Codigo de Referencia',
                    align: 'center',
                    valign: 'center',
                    sortable: true
                }]
            });
            $('#btn-procesar').fadeIn('slow');
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
          },
          timeout: 10000 //tiempo maximo de espera por la peticion
        }); 
      });//del form 
      
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
      <div class="well">
        Seleccionar el archivo *.csv provisto por Tigo Money
      </div>
      <!--<?php echo $error;?>-->

<form id="upload_form" name="myform" action="<?php echo site_url("/upload/do_upload");?>" enctype="multipart/form-data">
  <input type="file" name="userfile" size="20"/>  
  <br /><br />
  <input type="submit" value="upload" class="btn btn-success"/>
</form>

<div class="notificacion"></div>
<div class="alertas"></div>
<div class="alertas2"></div>

<form id="data-table" name='dataTable' action="<?php echo site_url("/upload/process");?>">
  <!-- 
    Su contenido lo agregamos dinamicamente para poder sobreescribir la tabla cada vez que 
    seleccione otro archivo
  -->
</form>

    </div>
  </div>
</div>

<?php echo $this->load->view('footer'); ?>

</body>
</html>