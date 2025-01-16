<?php
ob_start();
include_once("config.php");

if (isset($_POST['input'])) {
	$input = $_POST['input'];

	$query = "SELECT * FROM clients";
	$result = mysqli_query($conn, $query);
	while ($row = mysqli_fetch_assoc($result)) {
		?>


<tr class="odd" >
<td class="sorting_1">
	<label class="checkboxs">
		<input type="checkbox">
		<span class="checkmarks"></span>
	</label>
</td>
<td>
	<div class="set-star rating-select">
		<i class="fa fa-star"></i>
	</div>
</td>
<td>
	<h2 class="table-avatar d-flex align-items-center"><a href="company-details.html" class="company-img">
		<img class="avatar-img" src="php/<?php echo $row["pic"] ?>" alt="User Image"></a><a href="company-details.html" class="profile-split d-flex flex-column"><?php echo $row["company"] ?></a></h2>
</td>
<td><?php echo $row["phone"] ?></td>
<td><?php echo $row["email"] ?></td>


<td><?php echo $row["username"] ?></td>
<td>
	<ul class="social-links d-flex align-items-center">
		<li><a href="#"><i class="ti ti-mail"></i></a></li>
		<li><a href="#"><i class="ti ti-phone-check"></i></a></li>
		<li><a href="#"><i class="ti ti-message-circle-share"></i></a></li>
		<li><a href="#"><i class="ti ti-brand-skype"></i></a></li>
		<li><a href="#"><i class="ti ti-brand-facebook "></i></a></li>
	</ul>
</td>
<td>
	<span class="badge badge-pill badge-status bg-success"><?php echo $row["status"] ?></span>
</td>
<td>
	<div class="dropdown table-action">
		<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
			<i class="fa fa-ellipsis-v"></i>
		</a>
		<div class="dropdown-menu dropdown-menu-right">
			<a class="dropdown-item edit-popup" 
			data-bs-toggle="modal" 
            data-bs-target="#edit-po" 
            data-clientid= "<?php echo $row["id"] ?>"
            data-username="<?php echo $row["username"] ?>"
            data-password="<?php echo $row["password"] ?>"
            data-email="<?php echo $row["email"] ?>"
            data-phone="<?php echo $row["phone"] ?>"
            data-location="<?php echo $row["location"] ?>"
            data-company="<?php echo $row["company"] ?>"
            data-status="<?php echo $row["status"] ?>"
            data-street="<?php echo $row["street"] ?>"
            data-city="<?php echo $row["city"] ?>"
            data-state="<?php echo $row["state"] ?>"
            data-country="<?php echo $row["country"] ?>"
            data-zipcode="<?php echo $row["zipcode"] ?>"
            data-facebook="<?php echo $row["facebook"] ?>"
            data-skype="<?php echo $row["skype"] ?>"
            data-linkedin="<?php echo $row["linkedin"] ?>"
            data-twitter="<?php echo $row["twitter"] ?>"
            data-whatsapp="<?php echo $row["whatsapp"] ?>"
            data-instagram="<?php echo $row["instagram"] ?>"
            data-description="<?php echo $row["description"] ?>"
            data-pic="<?php echo "php/" . $row["pic"] ?>"
            data-altphone="<?php echo $row["altphone"] ?>"
            data-website="<?php echo $row["website"] ?>"
            data-source="<?php echo $row["source"] ?>"
            data-amount="<?php echo $row["amount"] ?>"
            data-rating="<?php echo $row["rating"] ?>"
            
            >
				<i class="ti ti-edit text-blue"></i> Edit
			</a>
			<a class="dropdown-item" href="#" data-bs-toggle="modal" data-userid="<?php echo $row["id"] ?>" data-leadsname="<?php echo $row["company"] ?>" data-bs-target="#delete_contact">
				<i class="ti ti-trash text-danger"></i> Delete
			</a>
			<a class="dropdown-item" href="company-details.html">
				<i class="ti ti-eye text-blue-light"></i> Preview
			</a>
		</div>
	</div>
</td>
</tr>

		<?php
	}
}


?>