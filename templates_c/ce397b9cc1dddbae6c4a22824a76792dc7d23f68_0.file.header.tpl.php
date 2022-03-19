<?php
/* Smarty version 4.0.4, created on 2022-03-11 16:09:29
  from 'C:\xampp\htdocs\earningsystem\templates\twenty_one\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622b6629dc58d4_64770213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce397b9cc1dddbae6c4a22824a76792dc7d23f68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\earningsystem\\templates\\twenty_one\\header.tpl',
      1 => 1647011366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622b6629dc58d4_64770213 (Smarty_Internal_Template $_smarty_tpl) {
?><HTML>
<HEAD>
<TITLE><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</TITLE>
</HEAD>
<BODY bgcolor="#ffffff">
<style>
*{ font-family: arial; }
table { width: 100% }
td{ padding:10px; border:1px solid #ddd; }
li{ display: inline-block; }
ul li a { display : inline-block; padding: 10px; }
</style>
<ul>
<li><a href="index.php">Dashbord</a></li>
<li><a href="tasks.php">Earn</a></li>
<li><a href="widthdrow.php">Widthrow</a></li>
<li><a href="profile.php">Profile</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
<hr><?php }
}
