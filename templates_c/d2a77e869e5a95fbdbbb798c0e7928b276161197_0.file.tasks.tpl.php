<?php
/* Smarty version 4.0.4, created on 2022-03-02 18:11:12
  from 'C:\xampp\htdocs\earningsystem\templates\twenty_one\tasks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_621fa5302cf142_49318318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2a77e869e5a95fbdbbb798c0e7928b276161197' => 
    array (
      0 => 'C:\\xampp\\htdocs\\earningsystem\\templates\\twenty_one\\tasks.tpl',
      1 => 1646241065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:twenty_one/header.tpl' => 1,
    'file:twenty_one/footer.tpl' => 1,
  ),
),false)) {
function content_621fa5302cf142_49318318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:twenty_one/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<h4>All Tasks</h4>

<table>
<tr>
<th>Titel</th>
<th>Points</th>
<th>action</th>
<tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['task']->value['taskTitle'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['task']->value['taskPrice'];?>
</td>
<td><a href="viewtask.php?taskid=<?php echo $_smarty_tpl->tpl_vars['task']->value['taskId'];?>
">View</a></td>
<tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>
<?php $_smarty_tpl->_subTemplateRender("file:twenty_one/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
