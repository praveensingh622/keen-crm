
<div class="toggle-popup1" >
<div class="sidebar-layout">
<div class="sidebar-header">
<h4>Edit Contact</h4>
<a href="#" class="sidebar-close1 toggle-btn"><i class="ti ti-x"></i></a>
</div>
<div class="toggle-body">
<div class="pro-create" id="edit-po">
<form action="php/edit-panel.php" method="POST">
<div class="accordion-lists" id="list-accords">

<div class="user-accordion-item">
<a href="#" class="accordion-wrap" data-bs-toggle="collapse" data-bs-target="#edit-basic"><span><i class="ti ti-user-plus"></i></span>Basic Info</a>
<div class="accordion-collapse collapse show" id="edit-basic" data-bs-parent="#list-accords">
<div class="content-collapse">
<div class="row">
<div class="col-md-12">
<div class="form-wrap">
<div class="profile-upload">
<div class="profile-upload-img">
<span><i class="ti ti-photo"></i></span>
<img src="assets/img/profiles/avatar-20.jpg" alt="img" class="preview1">
<button type="button" class="profile-remove">
<i class="ti ti-x"></i>
</button>
</div>
<div class="profile-upload-content">
<label class="profile-upload-btn">
<i class="ti ti-file-broken"></i> Upload File
<input type="file" class="input-img" name="profile">
</label>
<p>JPG, GIF or PNG. Max size of 800K</p>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
	<input type="hidden" name="user_id" >
<label class="col-form-label">First Name <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="name" value="">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Last Name <span class="text-danger">*</span></label>
<input type="text" class="form-control" value="" name="lname">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">UserName <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="username" value="Facility Manager">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Password <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="password" value="Facility Manager">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Job Title <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="jobtitle" value="Facility Manager">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Fax <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="fax" value="Facility Manager">
</div>
</div>
<div class="col-md-12">
<div class="form-wrap">
<div class="d-flex justify-content-between align-items-center">
<label class="col-form-label">Email <span class="text-danger">*</span></label>
<div class="status-toggle small-toggle-btn d-flex align-items-center">
<span class="me-2 label-text">Email Opt Out</span>
<input type="checkbox" id="user2" class="check" checked>
<label for="user2" class="checktoggle"></label>
</div>
</div>
<input type="text" name="email" class="form-control" >
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Phone 1 <span class="text-danger">*</span></label>
<input type="text" name="phone" class="form-control" value="1234567890">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Phone 2</label>
<input type="text" name="phone2" class="form-control">
</div>
</div>

<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Date of Birth</label>
<div class="icon-form-end">
<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
<input type="text" class="form-control datetimepicker" value="29-02-2020">
</div>
</div>
</div>


<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Role/Position <span class="text-danger">*</span></label>
<select class="select2">
<option>Choose</option>
<option selected>Phone Calls</option>
<option>Social Media</option>
<option>Referral Sites</option>
<option>Web Analytics</option>
<option>Previous Purchases</option>
</select>
</div>
</div>

<div class="col-md-12">
<div class="form-wrap mb-0">
<label class="col-form-label">Description <span class="text-danger">*</span></label>
<textarea name="description" class="form-control" rows="5"></textarea>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="user-accordion-item">
<a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#edit-address"><span><i class="ti ti-map-pin-cog"></i></span>Address Info</a>
<div class="accordion-collapse collapse" id="edit-address" data-bs-parent="#list-accords">
<div class="content-collapse">
<div class="row">
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Street Address </label>
<input type="text" name="street" class="form-control" value="22, Ave Street">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">City </label>
<input type="text" name="city" class="form-control" value="Denver">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">State / Province </label>
<input type="text" name="state" class="form-control" value="Colorado">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap mb-wrap">
<label class="col-form-label">Country</label>
<select class="select" name="country">
	<option del="country"><div class="country"></div></option>
<option>Choose</option>
<option>India</option>
<option selected>USA</option>
<option>France</option>
<option>UK</option>
<option>UAE</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap mb-0">
<label class="col-form-label">Zipcode </label>
<input type="text" class="form-control" name="zipcode">
</div>
</div>
</div>
</div>
</div>
</div>


<div class="user-accordion-item">
<a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#edit-social"><span><i class="ti ti-social"></i></span>Social Profile</a>
<div class="accordion-collapse collapse" id="edit-social" data-bs-parent="#list-accords">
<div class="content-collapse">
<div class="row">
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Facebook</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Skype </label>
<input type="text" class="form-control" name="skype">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Linkedin </label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Twitter</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap mb-wrap">
<label class="col-form-label">Whatsapp</label>
<input type="text" class="form-control" value="1234567890">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap mb-0">
<label class="col-form-label">Instagram</label>
<input type="text" class="form-control">
</div>
</div>

</div>
</div>
</div>
</div>
<div class="radio-wrap">
										<label class="col-form-label">Status</label>
										<div class="d-flex align-items-center">
											<div class="me-2">
												<input type="radio" class="status-radio" id="active1" name="status" checked="" value="Active">
												<label for="active1">Active</label>
											</div>
											<div>
												<input type="radio" class="status-radio" id="inactive1" name="status" value="Inactive">
												<label for="inactive1">Inactive</label>
											</div>
										</div>
									</div>
</div>
<div class="submit-button text-end">
<a href="#" class="btn btn-light sidebar-close1">Cancel</a>
<button type="submit" name="submit" class="btn btn-primary">Save Changes</a>
</div>
</form>
</div>
</div>
</div>
</div>