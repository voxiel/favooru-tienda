<ul class="nav nav-list">
  <!-- <li class="nav-header">Account Info</li>
  <li class="<?php echo ($current == 'account_profile') ? 'active' : ''; ?>"><?php echo anchor('account/account_profile', lang('website_profile')); ?></li>
  
  <li class="<?php echo ($current == 'account_settings') ? 'active' : ''; ?>"><?php echo anchor('account/account_settings', lang('website_account')); ?></li>
  
  <?php if ($account->password) : ?>
    <li class="<?php echo ($current == 'account_password') ? 'active' : ''; ?>"><?php echo anchor('account/account_password', lang('website_password')); ?></li>
  <?php endif; ?>
  
  <li class="<?php echo ($current == 'account_linked') ? 'active' : ''; ?>"><?php echo anchor('account/account_linked', lang('website_linked')); ?></li>

  <?php if ($this->authorization->is_permitted( array('retrieve_users', 'retrieve_roles', 'retrieve_permissions') )) : ?> -->
    <li class="nav-header">Admin Panel</li>
    <?php if ($this->authorization->is_permitted('retrieve_roles')) : ?>
      <li class="<?php echo ($current == 'manage_productos') ? 'active' : ''; ?>"><?php echo anchor('account/favooru_productos', 'Productos'); ?></li>
    <?php endif; ?>

    <?php if ($this->authorization->is_permitted('retrieve_roles')) : ?>
      <li class="<?php echo ($current == 'manage_clientes') ? 'active' : ''; ?>"><?php echo anchor('account/favooru_clientes', 'Clientes'); ?></li>
    <?php endif; ?>

    <?php if ($this->authorization->is_permitted('retrieve_roles')) : ?>
      <li class="<?php echo ($current == 'manage_afiliados') ? 'active' : ''; ?>"><?php echo anchor('account/favooru_afiliados', 'Afiliados'); ?></li>
    <?php endif; ?>

    <?php if ($this->authorization->is_permitted('retrieve_roles')) : ?>
      <li class="<?php echo ($current == 'manage_pedidos') ? 'active' : ''; ?>"><?php echo anchor('account/favooru_pedidos', 'Pedidos'); ?></li>
    <?php endif; ?>

    <?php if ($this->authorization->is_permitted('retrieve_roles')) : ?>
      <li class="<?php echo ($current == 'manage_cargar_datos') ? 'active' : ''; ?>"><?php echo anchor('account/favooru_upload', 'Cargar Datos'); ?></li>
    <?php endif; ?>

    <?php if ($this->authorization->is_permitted('retrieve_roles')) : ?>
      <li class="<?php echo ($current == 'manage_cargar_accesos') ? 'active' : ''; ?>"><?php echo anchor('account/favooru_upload_access', 'Cargar Accesos'); ?></li>
    <?php endif; ?>

    <!--<?php if ($this->authorization->is_permitted('retrieve_permissions')) : ?>
      <li class="<?php echo ($current == 'manage_permissions') ? 'active' : ''; ?>"><?php echo anchor('account/manage_permissions', lang('website_manage_permissions')); ?></li>
    <?php endif; ?>
  <?php endif; ?>-->

</ul>