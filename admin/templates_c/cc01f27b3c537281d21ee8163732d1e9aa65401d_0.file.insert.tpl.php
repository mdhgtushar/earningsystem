<?php
/* Smarty version 4.0.4, created on 2022-03-11 10:34:34
  from 'C:\xampp\htdocs\earningsystem\modules\students\template\insert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622b17aac2bf56_91067534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc01f27b3c537281d21ee8163732d1e9aa65401d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\earningsystem\\modules\\students\\template\\insert.tpl',
      1 => 1644075108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622b17aac2bf56_91067534 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php if ((isset($_smarty_tpl->tpl_vars['insertData']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['insertData']->value == 1) {?>
	<div class="text-success"><strong>Successfully deleted!</strong></div><br>
	<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['insertData']->value == 0) {?>
	<div class="text-danger"><strong>Something wrong to delete!</strong></div><br>
	<?php }
}?>
<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Student Admit</h5>
									<h6 class="card-subtitle text-muted">Admit a new student</h6>
								</div>
								<div class="card-body">
									<form action="?moduleName=students&admit=true&submit=true" method="post">
										
										<div class="row">
											<div class="mb-3 col-md-6">
												<label class="form-label" for="inputCity">Full name</label>
												<input type="text" class="form-control" name="name">
											</div>
											<div class="mb-3 col-md-4">
												<label class="form-label" for="inputState">Class</label>
												<select name="class" class="form-control">
													<option selected="">Choose...</option>
													<option>...</option>
												</select>
											</div>
											<div class="mb-3 col-md-2">
												<label class="form-label" for="inputZip">Roll</label>
												<input type="text" class="form-control" name="roll">
											</div>
										</div>
										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>
<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['adminTemplateName']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
