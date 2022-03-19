<?php
/* Smarty version 4.0.4, created on 2022-03-11 10:34:13
  from 'C:\xampp\htdocs\earningsystem\admin\templates\twenty_one_admin\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622b1795412946_49003414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff215e3c0001ab59c6d3126c8e7a93308283ae52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\earningsystem\\admin\\templates\\twenty_one_admin\\header.tpl',
      1 => 1643891730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:twenty_one_admin/sidebar.tpl' => 1,
  ),
),false)) {
function content_622b1795412946_49003414 (Smarty_Internal_Template $_smarty_tpl) {
?><HTML>
<HEAD>
<TITLE><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</HEAD>
<BODY bgcolor="#ffffff">


<?php $_smarty_tpl->_subTemplateRender("file:twenty_one_admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Page Content -->
<div style="margin-left:25%">

<div class="w3-container w3-teal">
  <h1>My Page</h1>
</div>


<div class="w3-container">
<?php }
}
