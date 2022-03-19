<?php
/* Smarty version 4.0.4, created on 2022-03-11 10:33:50
  from 'C:\xampp\htdocs\earningsystem\admin\templates\adminkit-dev\getmodule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622b177e62ec06_93828937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd615b71d43207d9f4383b45012bb5062445399e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\earningsystem\\admin\\templates\\adminkit-dev\\getmodule.tpl',
      1 => 1643984364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminkit-dev/header.tpl' => 1,
    'file:adminkit-dev/footer.tpl' => 1,
  ),
),false)) {
function content_622b177e62ec06_93828937 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:adminkit-dev/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'SCMS'), 0, false);
?>

<h1>Module Error</h1>
<?php $_smarty_tpl->_subTemplateRender("file:adminkit-dev/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
