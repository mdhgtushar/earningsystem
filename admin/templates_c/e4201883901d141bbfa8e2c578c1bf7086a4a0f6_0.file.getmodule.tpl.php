<?php
/* Smarty version 4.0.4, created on 2022-02-04 15:19:26
  from 'C:\xampp\htdocs\modules\admin\templates\adminkit-dev\getmodule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_61fd35ee797bc1_24872523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4201883901d141bbfa8e2c578c1bf7086a4a0f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modules\\admin\\templates\\adminkit-dev\\getmodule.tpl',
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
function content_61fd35ee797bc1_24872523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:adminkit-dev/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'SCMS'), 0, false);
?>

<h1>Module Error</h1>
<?php $_smarty_tpl->_subTemplateRender("file:adminkit-dev/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
