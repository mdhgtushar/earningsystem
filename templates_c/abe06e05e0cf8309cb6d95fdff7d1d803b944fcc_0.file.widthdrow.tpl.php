<?php
/* Smarty version 4.0.4, created on 2022-03-04 18:09:44
  from 'C:\xampp\htdocs\earningsystem\templates\twenty_one\widthdrow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622247d80b33b2_17424286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abe06e05e0cf8309cb6d95fdff7d1d803b944fcc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\earningsystem\\templates\\twenty_one\\widthdrow.tpl',
      1 => 1646413746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:twenty_one/header.tpl' => 1,
    'file:twenty_one/footer.tpl' => 1,
  ),
),false)) {
function content_622247d80b33b2_17424286 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:twenty_one/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<h4>Widthdrow Tasks</h4>

<?php if ((isset($_smarty_tpl->tpl_vars['widhdrowAblity']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['widhdrowAblity']->value == 1) {?>
	You can Widthdrow 2 Taka <a href='?submit'> Widthdrow Now</a>
	<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['widhdrowAblity']->value == 0) {?>
	You can't Widthdrow . Min widthdrow ammount is 2 taka
	<?php }?>
   
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:twenty_one/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
