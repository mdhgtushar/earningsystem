<?php
/* Smarty version 4.0.4, created on 2022-03-11 09:42:27
  from 'C:\xampp\htdocs\earningsystem\templates\twenty_one\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622b0b73d77b97_29646464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6956953a3748a6a8e5e53adf09abcfdfba20b935' => 
    array (
      0 => 'C:\\xampp\\htdocs\\earningsystem\\templates\\twenty_one\\index.tpl',
      1 => 1646988144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:twenty_one/header.tpl' => 1,
    'file:twenty_one/footer.tpl' => 1,
  ),
),false)) {
function content_622b0b73d77b97_29646464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:twenty_one/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<h4>Account Info</h4>
<p>Carrent Balance: <?php echo $_smarty_tpl->tpl_vars['carrentBal']->value;?>
</p>
<p>Today's Income: <?php echo $_smarty_tpl->tpl_vars['todayEarn']->value;?>
</p>
<p>Total Earning: <?php echo $_smarty_tpl->tpl_vars['totalBal']->value;?>
</p>
<p>Total Widthrow: <?php echo $_smarty_tpl->tpl_vars['totalPayment']->value;?>
</p>
<p>Total Reffer: <?php echo $_smarty_tpl->tpl_vars['totalRef']->value;?>
</p>

<?php $_smarty_tpl->_subTemplateRender("file:twenty_one/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
