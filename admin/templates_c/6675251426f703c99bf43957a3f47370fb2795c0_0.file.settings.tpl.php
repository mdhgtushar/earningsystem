<?php
/* Smarty version 4.0.4, created on 2022-02-06 16:21:53
  from 'C:\xampp\htdocs\modules\admin\templates\twenty_one_admin\settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_61ffe791344bf9_34137969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6675251426f703c99bf43957a3f47370fb2795c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modules\\admin\\templates\\twenty_one_admin\\settings.tpl',
      1 => 1644160910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:twenty_one_admin/header.tpl' => 1,
    'file:twenty_one_admin/footer.tpl' => 1,
  ),
),false)) {
function content_61ffe791344bf9_34137969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:twenty_one_admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'SCMS'), 0, false);
?>

<h1>Site Settings</h1>
<form action="?updateClientTemp" method="post">
<p>select a frontend template</p>
<select>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forntedTemp']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
  <option><?php echo $_smarty_tpl->tpl_vars['value']->value['moduleName'];?>
</option>
  <hr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<input type="submit">
</form>

<hr/>

<form action="?updateAdminTemp" method="post">
<p>select a admin template</p>
<select name="set_value">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adminTemp']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
  <option><?php echo $_smarty_tpl->tpl_vars['value']->value['moduleName'];?>
</option>
  <hr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<input type="submit">
</form>
<?php $_smarty_tpl->_subTemplateRender("file:twenty_one_admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
