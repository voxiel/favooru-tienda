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
      <?php echo $this->load->view('account/account_menu', array('current' => 'manage_afiliados')); ?>
    </div>

    <div class="span10">

      <h2>Afiliados</h2>

      <div class="well">
        Listado de afiliados al programa FavoorU
      </div>

      <?php if( count($all_accounts) > 0 ) : ?>
        <table class="table-striped" data-toggle="table" data-sort-name="name" data-sort-order="desc" data-show-refresh="true" data-search="true">
          <thead>
            <tr>
              <th data-field="id" data-align="center" data-sortable="true">Código</th>
              <th data-field="nombres" data-align="center" data-sortable="true">Nombre</th>
              <th data-field="apellidos" data-align="center" data-sortable="true">Correo</th>
              <th data-field="apellidos" data-align="center" data-sortable="true">Fecha de Nacimiento</th>
              <th data-field="apellidos" data-align="center" data-sortable="true">Link Facebook</th>
            </tr>
          </thead>
          <tbody>

            <?php foreach( $all_accounts as $acc ) : ?>
              <tr>
                <td><?php echo $acc['afiliados_id']; ?></td>
                <td>
                  <?php echo $acc['afiliados_nombre']; ?>
                </td>
                <td><?php echo $acc['afiliados_correo']; ?></td>
                 <td><?php echo $acc['afiliados_fecha_nac']; ?></td>
                <td><?php echo $acc['afiliados_link_fb']; ?></td>
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
