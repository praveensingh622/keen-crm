
<div class="toggle-popup1">
<div class="sidebar-layout">
<div class="sidebar-header">
<h4>Edit Lead</h4>
<a href="#" class="sidebar-close1 toggle-btn"><i class="ti ti-x"></i></a>
</div>
<div class="toggle-body">
<div class="pro-create" id="edit-po">
<form action="php/edit-leads.php" method="POST">
<div class="row">
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Lead Name <span class="text-danger">*</span></label>
<input type="hidden" class="form-control" name="leadsid" value="">
<input type="text" class="form-control" name="leadsname" value="">
</div>
</div>
<div class="col-md-12">
<div class="form-wrap">
<div class="radio-wrap">
<label class="col-form-label">Lead Type</label>
<div class="d-flex flex-wrap">
<div class="radio-btn">
<input type="radio" class="status-radio" id="person-2" name="leave" value="person" checked>
<label for="person-2">Person</label>
</div>
<div class="radio-btn">
<input type="radio" class="status-radio" id="org-2" name="leave" value="organization">
<label for="org-2">Organization</label>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">

<label class="col-form-label">Company <span class="text-danger">*</span></label>
<input type="text" name="leadscompanyname" class="form-control">


</div>
</div>
<div class="col-md-6">
<div class="form-wrap">

<label class="col-form-label">Email <span class="text-danger">*</span></label>
<input type="text" name="leadsemail" class="form-control">


</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Value <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="leadsvalue" value="10">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Currency <span class="text-danger">*</span></label>
<input type="text" name="leadscurrency" class="form-control">
</div>
</div>
<div class="col-md-12">
<div class="add-product-new">
<div class="row align-items-end">
<div class="col-md-8">
<div class="form-wrap mb-2">
<label class="col-form-label">Phone <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="leadsphone" value="+1 875455453">
</div>
</div>
<div class="col-md-4 d-flex align-items-center">
<div class="form-wrap w-100 mb-2">
<input type="text" name="leadsphonetype" class="form-control">
</div>
</div>
</div>
</div>
</div>
<div class="col-md-12">
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Source <span class="text-danger">*</span></label>
<input type="text" name="leadsource" class="form-control" >

</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Industry <span class="text-danger">*</span></label>
<input type="text" name="leadsindustry" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Owner</label>
<input type="text" name="leadsowner" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Tags </label>
<input class="input-tags form-control" type="text" data-role="tagsinput" name="Label" value="Rated">
</div>
</div>
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Description <span class="text-danger">*</span></label>
<textarea class="form-control" rows="5" name="leadsdescription" id="edit-po"></textarea>
</div>
</div>
<div class="col-md-12">
<div class="radio-wrap form-wrap">
<label class="col-form-label">Visibility</label>
<div class="d-flex flex-wrap">
<div class="radio-btn">
<input type="radio" class="status-radio" id="public-2" name="visible">
<label for="public-2">Public</label>
</div>
<div class="radio-btn">
<input type="radio" class="status-radio" id="private-2" name="visible">
<label for="private-2">Private</label>
</div>
<div class="radio-btn" data-bs-toggle="modal" data-bs-target="#access_view">
<input type="radio" class="status-radio" id="people-2" name="visible">
<label for="people-2">Select People</label>
</div>
</div>
</div>
<div class="radio-wrap form-wrap">
<label class="col-form-label">Status</label>
<div class="d-flex flex-wrap">
<div class="radio-btn">
<input type="radio" class="status-radio" id="active-2" name="status" value="active" checked>
<label for="active-2">Active</label>
</div>
<div class="radio-btn">
<input type="radio" class="status-radio" id="inactive-2" name="status" value="active">
<label for="inactive-2">Inactive</label>
</div>
</div>
</div>
</div>
</div>
<div class="submit-button text-end">
<a href="#" class="btn btn-light sidebar-close1">Cancel</a>
<<button type="submit" name="edit_client" class="btn btn-primary">Save Changes</button>
</div>
</form>
</div>
</div>
</div>
</div>