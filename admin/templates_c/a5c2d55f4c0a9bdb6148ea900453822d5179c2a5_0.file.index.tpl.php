<?php
/* Smarty version 4.0.4, created on 2022-03-11 10:33:49
  from 'C:\xampp\htdocs\earningsystem\modules\ip_manager\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622b177db6ad35_87510728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5c2d55f4c0a9bdb6148ea900453822d5179c2a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\earningsystem\\modules\\ip_manager\\template\\index.tpl',
      1 => 1643985193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622b177db6ad35_87510728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['adminTemplateName']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'SCMS'), 0, true);
?>

<form action="getmodule.php?moduleName=ip_manager" method="post">
  <input type="text" name="hello">
  <input type="submit">
</form>

<div class="col-12 col-lg-12 col-xxl-12 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<div class="card-actions float-end">
										<div class="dropdown position-relative">
											<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Top Selling Products</h5>
								</div>
								<table class="table table-borderless my-0">
									<thead>
										<tr>
											<th>Name</th>
											<th class="d-none d-xxl-table-cell">Company</th>
											<th class="d-none d-xl-table-cell">Assigned</th>
											<th class="d-none d-xl-table-cell text-end">Orders</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="d-flex">
													<div class="flex-shrink-0">
														<div class="bg-light rounded-2">
															<img class="p-2" src="img/icons/brand-4.svg">
														</div>
													</div>
													<div class="flex-grow-1 ms-3">
														<strong>Aurora</strong>
														<div class="text-muted">
															UI Kit
														</div>
													</div>
												</div>
											</td>
											<td class="d-none d-xxl-table-cell">
												<strong>Lechters</strong>
												<div class="text-muted">
													Real Estate
												</div>
											</td>
											<td class="d-none d-xl-table-cell">
												<strong>Vanessa Tucker</strong>
												<div class="text-muted">
													HTML, JS, React
												</div>
											</td>
											<td class="d-none d-xl-table-cell text-end">
												520
											</td>
											<td>
												<span class="badge badge-success-light">In progress</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex">
													<div class="flex-shrink-0">
														<div class="bg-light rounded-2">
															<img class="p-2" src="img/icons/brand-1.svg">
														</div>
													</div>
													<div class="flex-grow-1 ms-3">
														<strong>Bender</strong>
														<div class="text-muted">
															Dashboard
														</div>
													</div>
												</div>
											</td>
											<td class="d-none d-xxl-table-cell">
												<strong>Cellophane Transportation</strong>
												<div class="text-muted">
													Transportation
												</div>
											</td>
											<td class="d-none d-xl-table-cell">
												<strong>William Harris</strong>
												<div class="text-muted">
													HTML, JS, Vue
												</div>
											</td>
											<td class="d-none d-xl-table-cell text-end">
												240
											</td>
											<td>
												<span class="badge badge-warning-light">Paused</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex">
													<div class="flex-shrink-0">
														<div class="bg-light rounded-2">
															<img class="p-2" src="img/icons/brand-5.svg">
														</div>
													</div>
													<div class="flex-grow-1 ms-3">
														<strong>Camelot</strong>
														<div class="text-muted">
															Dashboard
														</div>
													</div>
												</div>
											</td>
											<td class="d-none d-xxl-table-cell">
												<strong>Clemens</strong>
												<div class="text-muted">
													Insurance
												</div>
											</td>
											<td class="d-none d-xl-table-cell">
												<strong>Darwin</strong>
												<div class="text-muted">
													HTML, JS, Laravel
												</div>
											</td>
											<td class="d-none d-xl-table-cell text-end">
												180
											</td>
											<td>
												<span class="badge badge-success-light">In progress</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex">
													<div class="flex-shrink-0">
														<div class="bg-light rounded-2">
															<img class="p-2" src="img/icons/brand-2.svg">
														</div>
													</div>
													<div class="flex-grow-1 ms-3">
														<strong>Edison</strong>
														<div class="text-muted">
															UI Kit
														</div>
													</div>
												</div>
											</td>
											<td class="d-none d-xxl-table-cell">
												<strong>Affinity Investment Group</strong>
												<div class="text-muted">
													Finance
												</div>
											</td>
											<td class="d-none d-xl-table-cell">
												<strong>Vanessa Tucker</strong>
												<div class="text-muted">
													HTML, JS, React
												</div>
											</td>
											<td class="d-none d-xl-table-cell text-end">
												410
											</td>
											<td>
												<span class="badge badge-danger-light">Cancelled</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex">
													<div class="flex-shrink-0">
														<div class="bg-light rounded-2">
															<img class="p-2" src="img/icons/brand-3.svg">
														</div>
													</div>
													<div class="flex-grow-1 ms-3">
														<strong>Fusion</strong>
														<div class="text-muted">
															Dashboard
														</div>
													</div>
												</div>
											</td>
											<td class="d-none d-xxl-table-cell">
												<strong>Konsili</strong>
												<div class="text-muted">
													Retail
												</div>
											</td>
											<td class="d-none d-xl-table-cell">
												<strong>Christina Mason</strong>
												<div class="text-muted">
													HTML, JS, Vue
												</div>
											</td>
											<td class="d-none d-xl-table-cell text-end">
												250
											</td>
											<td>
												<span class="badge badge-warning-light">Paused</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['adminTemplateName']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
