<?php
/* Smarty version 4.0.4, created on 2022-02-06 16:11:57
  from 'C:\xampp\htdocs\modules\admin\templates\twenty_one_admin\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_61ffe53d2e2ef7_23079016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1a08bfc55c34951da4cdef23d3e0f12b637c5ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modules\\admin\\templates\\twenty_one_admin\\sidebar.tpl',
      1 => 1644160312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ffe53d2e2ef7_23079016 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="index.php" class="w3-bar-item w3-button">Dashbord</a>
  <a href="modules.php" class="w3-bar-item w3-button">Modules</a>
  <hr style="border: 1px solid #ddd">
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
$__foreach_value_3_saved = $_smarty_tpl->tpl_vars['value'];
?>
  <a href="getmodule.php?moduleName=<?php echo $_smarty_tpl->tpl_vars['value']->key;?>
" class="w3-bar-item w3-button"> <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a>
  <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <hr style="border: 1px solid #ddd">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <a href="settings.php" class="w3-bar-item w3-button">Settings</a>

</div><?php }
}
