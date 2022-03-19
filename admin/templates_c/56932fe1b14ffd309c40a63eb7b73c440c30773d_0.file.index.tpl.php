<?php
/* Smarty version 4.0.4, created on 2022-03-11 10:34:13
  from 'C:\xampp\htdocs\earningsystem\admin\templates\twenty_one_admin\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622b17953b4520_66081833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56932fe1b14ffd309c40a63eb7b73c440c30773d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\earningsystem\\admin\\templates\\twenty_one_admin\\index.tpl',
      1 => 1643889975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:twenty_one_admin/header.tpl' => 1,
    'file:twenty_one_admin/footer.tpl' => 1,
  ),
),false)) {
function content_622b17953b4520_66081833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:twenty_one_admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'SCMS'), 0, false);
?>

<h1>body</h1>
<?php $_smarty_tpl->_subTemplateRender("file:twenty_one_admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
