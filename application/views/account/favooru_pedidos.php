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
      <?php echo $this->load->view('account/account_menu', array('current' => 'manage_pedidos')); ?>
    </div>

    <div class="span10">

      <h2><?php echo lang('product_page_name'); ?></h2>

      <div class="well">
        <?php echo lang('product_description'); ?>
      </div>

      <?php if( count($all_accounts) > 0 ) : ?>
        <table class="table-striped" data-toggle="table" data-sort-name="name" data-sort-order="desc" data-show-refresh="true" data-search="true">
          <thead>
            <tr>
              <th data-field="id" data-align="center" data-sortable="true">Código</th>
              <th data-field="nombreC" data-align="center" data-sortable="true">Nombres Cliente</th>
              <th data-field="apellidoC" data-align="center" data-sortable="true">Apellidos Cliente</th>
              <th data-field="producto" data-align="center" data-sortable="true">Producto</th>
              <th data-field="precio" data-align="center" data-sortable="true">Precio</th>
              <th data-field="codigoT" data-align="center" data-sortable="true">Código Tigo</th>
              <th data-field="fecha" data-align="center" data-sortable="true">Fecha</th>
              <th data-field="afiliado" data-align="center" data-sortable="true">Afiliado</th>
              <th data-field="estado" data-align="center" data-sortable="true">Estado</th>
            </tr>
          </thead>
          <tbody>

            <?php foreach( $all_accounts as $acc ) : ?>
              <tr>
                <td><?php echo $acc['pedidos_id']; ?></td>
                <td><?php echo $acc['clientes_nombre']; ?></td>
                <td><?php echo $acc['clientes_apellido']; ?></td>
                <td><?php echo  $acc['producto_descripcion']; ?></td>
                <td><?php echo $acc['producto_precio']; ?></td>
                <td><?php echo $acc['pedidos_codigo']; ?></td>
                <td><?php echo $acc['pedido_fecha']; ?></td>
                <td><?php echo  $acc['afiliados_nombre']; ?></td>
                <td><?php echo  $acc['pedido_estado']; ?></td>
              </tr>
            <?php endforeach; ?>

          </tbody>
        </table>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php echo $this->load->view('footer'); ?>

</body>
</html>
