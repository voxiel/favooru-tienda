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
      <?php echo $this->load->view('account/account_menu', array('current' => 'manage_productos')); ?>
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
              <th data-field="descripcion" data-align="center" data-sortable="true">Descripción</th>
              <th data-field="precio" data-align="center" data-sortable="true">Precio</th>
              <th data-field="link" data-align="center" data-sortable="true">Link a Producto</th>
              <th data-align="center">
                <?php if( $this->authorization->is_permitted('create_users') ): ?>
                  <?php echo anchor('account/favooru_productos/save',lang('website_create'),'class="btn btn-primary btn-small"'); ?>
                <?php endif; ?>
              </th>
            </tr>
          </thead>
          <tbody>

            <?php foreach( $all_accounts as $acc ) : ?>
              <tr>
                <td><?php echo $acc['producto_id']; ?></td>
                <td>
                  <?php echo $acc['producto_descripcion']; ?>
                </td>
                <td><?php echo $acc['producto_precio']; ?></td>
                <td><?php echo  $acc['producto_link']; ?></td>
                <td>
                  <?php if( $this->authorization->is_permitted('update_users') ): ?>
                    <?php echo anchor('account/favooru_productos/save/'.$acc['producto_id'],lang('website_update'),'class="btn btn-small"'); ?>
                  <?php endif; ?>
                </td>
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
