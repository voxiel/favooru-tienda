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

<form id="upload_form" name="myform" action="<?php echo site_url("/upload/do_upload");?>" enctype="multipart/form-data">
  <input type="file" name="userfile" size="20"/>  
  <br /><br />
  <input type="submit" value="upload" class="btn btn-success"/>
</form>

<table id="table-javascript"></table>
<script>
    $(function () {
        $('#via-javascript-table').next().click(function () {
            $(this).hide();

            $('#table-javascript').bootstrapTable({
                method: 'get',
                url: 'data2.json',
                cache: false,
                height: 400,
                striped: true,
                pagination: true,
                pageSize: 50,
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
                    field: 'id',
                    title: 'Item ID',
                    align: 'right',
                    valign: 'bottom',
                    sortable: true
                }, {
                    field: 'name',
                    title: 'Item Name',
                    align: 'center',
                    valign: 'middle',
                    sortable: true,
                    formatter: nameFormatter
                }, {
                    field: 'price',
                    title: 'Item Price',
                    align: 'left',
                    valign: 'top',
                    sortable: true,
                    formatter: priceFormatter,
                    sorter: priceSorter
                }, {
                    field: 'operate',
                    title: 'Item Operate',
                    align: 'center',
                    valign: 'middle',
                    clickToSelect: false,
                    formatter: operateFormatter,
                    events: operateEvents
                }]
            });
        });
    });
</script>
      
    </div>
  </div>
</div>

<?php echo $this->load->view('footer'); ?>

</body>
</html>





<!--
<div class="bs-example">
  <div class="bootstrap-table">
    <div class="fixed-table-toolbar">
      <div class="pull-right search">
        <input class="form-control" type="text" placeholder="Search">
      </div>
    </div>
  <div class="fixed-table-container" style="height: 291px; padding-bottom: 37px;">
  <div class="fixed-table-header" style="height: 37px; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(221, 221, 221); margin-right: 0px;">
    <table class="table table-hover" style="width: 798px;">
      <thead>
        <tr>
          <th class="bs-checkbox " style="width: 36px; ">
            <div class="th-inner ">
              <input name="btSelectAll" type="checkbox">
            </div>
            <div class="fht-cell" style="width: 36px;">
            </div>
          </th>
          <th style="text-align: right; ">
            <div class="th-inner sortable">Item ID
            </div>
            <div class="fht-cell" style="width: 205px;">
            </div>
          </th>
          <th style="text-align: center; ">
            <div class="th-inner sortable">Item Name
            </div>
            <div class="fht-cell" style="width: 283px;">
            </div>
          </th>
          <th style="">
            <div class="th-inner sortable">Item Price
            </div>
            <div class="fht-cell" style="width: 271px;">
            </div>
          </th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="fixed-table-body">
  <div class="fixed-table-loading" style="top: 37px; display: none;">Loading, please wait…
  </div>
    <table data-url="/examples/bootstrap_table/data" data-height="400" data-side-pagination="server" data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" class="table table-hover" style="margin-top: -41px;">
      <thead>
        <tr>
          <th class="bs-checkbox " style="width: 36px; ">
            <div class="th-inner ">
              <input name="btSelectAll" type="checkbox">
            </div>
            <div class="fht-cell">  
            </div>
          </th>
          <th style="text-align: right; ">
            <div class="th-inner sortable">Item ID
            </div>
            <div class="fht-cell">
            </div>
          </th>
          <th style="text-align: center; ">
            <div class="th-inner sortable">Item Name
            </div>
            <div class="fht-cell">
            </div>
          </th>
          <th style="">
            <div class="th-inner sortable">Item Price
            </div>
            <div class="fht-cell">
            </div>
          </th>
        </tr>
      </thead>
  <tbody>
    <tr data-index="0">
      <td class="bs-checkbox">
        <input data-index="0" name="btSelectItem" type="checkbox">
      </td>
      <td style="text-align: right; ">0
      </td>
      <td style="text-align: center; ">test0
      </td>
      <td style="">$0
      </td>
    </tr>
  </tbody>
</table>

</div>
<div class="fixed-table-pagination">
  <div class="pull-left pagination-detail">
    <span class="pagination-info">Showing 1 to 10 of 800 rows
    </span>
    <span class="page-list">
      <span class="btn-group dropup">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          <span class="page-size">10
          </span> 
          <span class="caret">
          </span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li>
            <a href="javascript:void(0)">5</a>
          </li>
          <li class="active"><a href="javascript:void(0)">10</a>
          </li>
          <li><a href="javascript:void(0)">20</a>
          </li>
          <li><a href="javascript:void(0)">50</a>
          </li>
          <li><a href="javascript:void(0)">100</a>
          </li>
          <li><a href="javascript:void(0)">200</a>
          </li>
        </ul>
      </span> records per page
    </span>
  </div>
  <div class="pull-right pagination">
    <ul class="pagination">
      <li class="page-first disabled"><a href="javascript:void(0)">&lt;&lt;</a></li>
      <li class="page-pre disabled"><a href="javascript:void(0)">&lt;</a></li>
      <li class="page-number active"><a href="javascript:void(0)">1</a></li>
      <li class="page-number"><a href="javascript:void(0)">2</a></li>
      <li class="page-number"><a href="javascript:void(0)">3</a></li>
      <li class="page-number"><a href="javascript:void(0)">4</a></li>
      <li class="page-number"><a href="javascript:void(0)">5</a></li>
      <li class="page-next"><a href="javascript:void(0)">&gt;</a></li>
      <li class="page-last"><a href="javascript:void(0)">&gt;&gt;</a></li>
    </ul>
  </div>
</div>
</div>
</div>
<div class="clearfix">
</div>
</div> -->
<!-- del contenedor de la tabla -->
