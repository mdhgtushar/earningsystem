<?php
/* Smarty version 4.0.4, created on 2022-03-04 17:46:50
  from 'C:\xampp\htdocs\earningsystem\templates\twenty_one\viewtask.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6222427a1e93a1_77909370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfcbafea5b605eab403d7726dbc7255a275fc0b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\earningsystem\\templates\\twenty_one\\viewtask.tpl',
      1 => 1646411718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:twenty_one/header.tpl' => 1,
    'file:twenty_one/footer.tpl' => 1,
  ),
),false)) {
function content_6222427a1e93a1_77909370 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:twenty_one/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<h4>vew Tasks</h4>

<?php if ((isset($_smarty_tpl->tpl_vars['viewExist']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['viewExist']->value == 1) {?>
	Already Exist <a href='tasks.php'> go back</a>
	<?php }?>
   
<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars['taskId']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['taskId']->value != 0) {?>
	Task ID = <?php echo $_smarty_tpl->tpl_vars['taskId']->value;?>

    <br>
     <?php if ($_smarty_tpl->tpl_vars['viewExist']->value == 0) {?>
	<a href='?taskid=<?php echo $_smarty_tpl->tpl_vars['taskId']->value;?>
&submit=true'> Submit View </a>
	<?php }?>
	<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['taskId']->value == 0) {?>
	 Task Not found
	<?php }
}?>


<?php $_smarty_tpl->_subTemplateRender("file:twenty_one/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
