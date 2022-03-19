<?php
/* Smarty version 4.0.4, created on 2022-03-04 18:21:07
  from 'C:\xampp\htdocs\earningsystem\modules\students\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62224a83721de9_10816359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f0e02905744773b3113bfa5e46ded81cc0004e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\earningsystem\\modules\\students\\template\\index.tpl',
      1 => 1646414464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62224a83721de9_10816359 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['adminTemplateName']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'SCMS'), 0, true);
?>

<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
							<h3><strong>Students </strong> Module</h3>
						</div>

						<div class="col-auto ms-auto text-end mt-n1">
							<a href="?moduleName=students" class="btn btn-primary me-2">View All Students</a>
							<a href="?moduleName=students&admit=true" class="btn btn-primary">Admit student</a>
						</div>
					</div>
<?php if ((isset($_smarty_tpl->tpl_vars['deleteRes']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['deleteRes']->value == 1) {?>
	<div class="text-success"><strong>Successfully deleted!</strong></div><br>
	<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['deleteRes']->value == 0) {?>
	<div class="text-danger"><strong>Something wrong to delete!</strong></div><br>
	<?php }
}?>
<div class="col-12 col-lg-12 col-xxl-12 d-flex">
							<div class="card flex-fill">
								
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>ID</th>
											<th>Name</th>
											<th class="d-none d-xxl-table-cell">Email</th>
											<th class="d-none d-xl-table-cell">Phone</th>
											<th class="d-none d-xl-table-cell">Action</th>
										</tr>
									</thead>
									<tbody>

									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['students']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
									

						<tr>
											<td class="d-none d-xxl-table-cell"><?php echo $_smarty_tpl->tpl_vars['contact']->value['userId'];?>
</td>
											<td class="d-none d-xl-table-cell"><?php echo $_smarty_tpl->tpl_vars['contact']->value['userName'];?>
</td>
											<td class="d-none d-xl-table-cell"><?php echo $_smarty_tpl->tpl_vars['contact']->value['userEmail'];?>
</td>
											<td class="d-none d-xl-table-cell"><?php echo $_smarty_tpl->tpl_vars['contact']->value['userPhone'];?>
</td>
											<td class="table-action">
												<a href="#"onclick="return window.confirm('Are you sure to Edit Data?')"><svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
												<a href="?moduleName=students&delete=<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
" class="text-danger"  onclick="return window.confirm('Are you sure to delete?')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
											</td>
										</tr>
										

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										
										
									</tbody>
								</table>
							</div>
						</div>
<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['adminTemplateName']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
