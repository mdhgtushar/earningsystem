<?php
/* Smarty version 4.0.4, created on 2022-02-03 13:06:51
  from 'C:\xampp\htdocs\modules\admin\templates\twenty_one_admin\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_61fbc55b1697c0_00102695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49ce7cc66aaa594558dcd4e41db8eabe5befc38b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modules\\admin\\templates\\twenty_one_admin\\index.tpl',
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
function content_61fbc55b1697c0_00102695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:twenty_one_admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'SCMS'), 0, false);
?>

<h1>body</h1>
<?php $_smarty_tpl->_subTemplateRender("file:twenty_one_admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
