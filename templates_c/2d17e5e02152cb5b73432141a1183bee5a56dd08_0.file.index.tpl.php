<?php
/* Smarty version 4.0.4, created on 2022-02-03 13:08:40
  from 'C:\xampp\htdocs\modules\templates\twenty_one\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_61fbc5c8ab2a95_52465364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d17e5e02152cb5b73432141a1183bee5a56dd08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modules\\templates\\twenty_one\\index.tpl',
      1 => 1643890118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:twenty_one/header.tpl' => 1,
    'file:twenty_one/footer.tpl' => 1,
  ),
),false)) {
function content_61fbc5c8ab2a95_52465364 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:twenty_one/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

<h1>body</h1>

<?php $_smarty_tpl->_subTemplateRender("file:twenty_one/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
