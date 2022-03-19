<?php
/* Smarty version 4.0.4, created on 2022-02-06 16:24:55
  from 'C:\xampp\htdocs\modules\admin\templates\adminkit-dev\settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_61ffe8471f7c18_94354596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bbae5ccc2352795b61e0f603df812e23ec1c283' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modules\\admin\\templates\\adminkit-dev\\settings.tpl',
      1 => 1644161092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminkit-dev/header.tpl' => 1,
    'file:adminkit-dev/footer.tpl' => 1,
  ),
),false)) {
function content_61ffe8471f7c18_94354596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:adminkit-dev/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'SCMS'), 0, false);
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
<?php $_smarty_tpl->_subTemplateRender("file:adminkit-dev/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
