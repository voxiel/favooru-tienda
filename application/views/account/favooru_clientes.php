<!DOCTYPE html>
<html>
<head>
  <?php echo $this->load->view('head', array('title' => lang('users_page_name'))); ?>
</head>
<body>

<?php echo $this->load->view('header'); ?>

<div class="container">
  <div class="row">

    <div class="span2">
      <?php echo $this->load->view('account/account_menu', array('current' => 'manage_clientes')); ?>
    </div>

    <div class="span10">

      <h2><?php echo lang('client_page_name'); ?></h2>

      <div class="well">
        <?php echo lang('client_description'); ?>
      </div>

      <?php if( count($all_accounts) > 0 ) : ?>
        <table class="table-striped" data-toggle="table" data-sort-name="name" data-sort-order="desc" data-show-refresh="true" data-search="true">
          <thead>
            <tr>
              <th data-field="id" data-align="center" data-sortable="true">Código</th>
              <th data-field="nombres" data-align="center" data-sortable="true">Nombres</th>
              <th data-field="apellidos" data-align="center" data-sortable="true">Apellidos</th>
            </tr>
          </thead>
          <tbody>

            <?php foreach( $all_accounts as $acc ) : ?>
              <tr>
                <td><?php echo $acc['cliente_id']; ?></td>
                <td>
                  <?php echo $acc['cliente_nombres']; ?>
                </td>
                <td><?php echo $acc['cliente_apellidos']; ?></td>
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
