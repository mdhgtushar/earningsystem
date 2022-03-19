<?php
/* Smarty version 4.0.4, created on 2022-03-04 18:17:53
  from 'C:\xampp\htdocs\earningsystem\admin\templates\adminkit-dev\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622249c1179988_81267891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8667f9f888689a4318eed2b1d788df93821a6920' => 
    array (
      0 => 'C:\\xampp\\htdocs\\earningsystem\\admin\\templates\\adminkit-dev\\sidebar.tpl',
      1 => 1644154666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622249c1179988_81267891 (Smarty_Internal_Template $_smarty_tpl) {
?><nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">SCMS</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="index.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
            </a>
					</li>

					<li class="sidebar-header">
						Tools & Modules
					</li>

					

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sidebar']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$__foreach_value_1_saved = $_smarty_tpl->tpl_vars['value'];
?>
  <li class="sidebar-item">
						<a class="sidebar-link" href="getmodule.php?moduleName=<?php echo $_smarty_tpl->tpl_vars['value']->key;?>
">
              <i class="align-middle" data-feather="square"></i> <span class="align-middle"> <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</span>
            </a>
					</li>
  <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


					<li class="sidebar-header">
						System Software
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="settings.php">
              <i class="align-middle" data-feather="square"></i> <span class="align-middle">Settings</span>
            </a>
					</li>

				</ul>

			</div>
		</nav><?php }
}
