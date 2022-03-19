<?php
/* Smarty version 4.0.4, created on 2022-02-11 13:30:16
  from 'C:\xampp\htdocs\modules\modules\module_name\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620656d8126436_44815881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '558d707140bfcc5b397263c63398b5e7b9073a48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modules\\modules\\module_name\\template\\index.tpl',
      1 => 1644582603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620656d8126436_44815881 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['adminTemplateName']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'SCMS'), 0, true);
?>
<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">

<section class='software-manager'>
<section class='header-section'>
   <div class='header-top'>
    <div class='header-left'><h2>Software manager</h2></div>
    <div class='header-right'><img src="../modules/module_name/template/header-logo-ltr.png"/></div>
   </div>
   <div class="header-bottom">
   <ul class='header-menu'>
   <li><a href=''>Key List</a></li>
   <li><a href=''>Group List</a></li>
   <li><a href=''>Add Key</a></li>
   <li><a href=''>Create Group</a></li>
   <li><a href=''>Settings</a></li>
   </ul>
   </div>
</section>
<br>
<section>

<div class='select-group'>
<div class="left-dropdown"><p>Not Any Group Selected</p></div>
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Select a Group</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
  </div>
</div>
</div>
<?php echo '<script'; ?>
>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
<?php echo '</script'; ?>
>
<table id="customers">
  <tr>
    <th>License Key</th>
    <th>Status</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Category</td>
  </tr>
  <tr>
    <td>Berglunds snabbköp</td>
    <td>Christina Berglund</td>
    <td>Sweden</td>
  </tr>
 
</table>
</section>
<br>
<section>
<div class="card">
 <div class="card-content">
    <h4><b>Software Manager UnInstall</b></h4> 
    <p>Parmanently Delete required table and datas for software manager.</p> 
  <a href=''>UnInstall</a>
  </div>
</div>
</section>

<section class="create-key">
<form action='' method='post'>
  <h2>Add keys</h2>
  <div>
    <select name='lic_grp'>
      <option value="file">Select Category</option>
      <option value="text">TextBox</option>
    </select>
  <input type="text" placeholder='Key' name='lic_key'> 
   <span id="fooBar"></span>
    <input type="button" value="add" onclick="add()" />
    <input type="submit" value="submit"/>
  </div>
</form>
<div class="instruction">
<h4>instructions</h4>
<hr>
<ul>
<li>Instruction</li>
<li>Instruction</li>
<li>Instruction</li>
</ul>
</div>

<?php echo '<script'; ?>
>
var i = 0;
function add() {
  //Create an input type dynamically.
  i++;
var element = document.createElement("INPUT");
element.setAttribute("type", "text");
element.setAttribute("name", "lic_key"+i);
element.setAttribute("placeholder", "Key"+i);
  var foo = document.getElementById("fooBar");

  //Append the element in page (in span)
  foo.appendChild(element);
}
<?php echo '</script'; ?>
>
 </section>
 
 <hr>
<section class="create-group">
<form action='' method='post'>
  <h2>Create Group</h2>
  <input type="text" placeholder='Key' name='lic_key'> 
    <input type="submit" value="submit"/>
</form>
<div class="instruction">
<h4>instructions</h4>
<hr>
<ul>
<li>Instruction</li>
<li>Instruction</li>
<li>Instruction</li>
</ul>
</div>
 </section>
</section>
<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['adminTemplateName']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
