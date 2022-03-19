{config_load file="test.conf" section="setup"}
{include file="$adminTemplateName/header.tpl" title='SCMS'}

<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
							<h3><strong>Students </strong> Module</h3>
						</div>

						<div class="col-auto ms-auto text-end mt-n1">
							<a href="?moduleName=students" class="btn btn-primary me-2">View All Students</a>
							<a href="?moduleName=students&admit=true" class="btn btn-primary">Admit student</a>
						</div>
					</div>
{if isset($deleteRes)}
    {if $deleteRes == 1}
	<div class="text-success"><strong>Successfully deleted!</strong></div><br>
	{/if}
    {if $deleteRes == 0}
	<div class="text-danger"><strong>Something wrong to delete!</strong></div><br>
	{/if}
{/if}
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

									{foreach $students as $contact}
									

						<tr>
											<td class="d-none d-xxl-table-cell">{$contact.userId}</td>
											<td class="d-none d-xl-table-cell">{$contact.userName}</td>
											<td class="d-none d-xl-table-cell">{$contact.userEmail}</td>
											<td class="d-none d-xl-table-cell">{$contact.userPhone}</td>
											<td class="table-action">
												<a href="#"onclick="return window.confirm('Are you sure to Edit Data?')"><svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
												<a href="?moduleName=students&delete={$contact.id}" class="text-danger"  onclick="return window.confirm('Are you sure to delete?')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
											</td>
										</tr>
										

{/foreach}
										
										
									</tbody>
								</table>
							</div>
						</div>
{include file="$adminTemplateName/footer.tpl"}