<?php
/* Smarty version 4.0.4, created on 2022-03-11 10:12:50
  from 'C:\xampp\htdocs\earningsystem\templates\twenty_one\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622b12927c5685_09822262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37ce1593104812b129aa758e270cef3ebdb13f66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\earningsystem\\templates\\twenty_one\\login.tpl',
      1 => 1646989966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622b12927c5685_09822262 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="index.php">home</a>
<form action="" method="post">
<h2>Please login your account</h2>
<input type="emain" name="email" placeholder="enter your email"><br><br>
<input type="passoword" name="password" placeholder="enter your Password"/><br><br>
<input type="submit" name="login_action" >
<br><br>
Don't have any account? <a href="signup.php">Please Signup</a>
</form><?php }
}
