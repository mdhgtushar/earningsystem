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
{if isset($insertData)}
    {if $insertData == 1}
	<div class="text-success"><strong>Successfully deleted!</strong></div><br>
	{/if}
    {if $insertData == 0}
	<div class="text-danger"><strong>Something wrong to delete!</strong></div><br>
	{/if}
{/if}
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
{include file="$adminTemplateName/footer.tpl"}