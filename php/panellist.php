<?php
ob_start();
include_once("config.php");

if (isset($_POST['input'])) {
	$input = $_POST['input'];

	$query = "SELECT * FROM admin WHERE `username` LIKE '%{$input}%' OR `phone` LIKE '%{$input}%'";
	$result = mysqli_query($conn, $query);
	while ($user_row = mysqli_fetch_assoc($result)) {
		?>


<tr class="odd">
		
		
		<td>
			<a href="#" class="avatar"><img class="avatar-img" src="php/<?php echo $user_row["profile"] ?>" alt="User Image"></a>
</td>
<td><h2 class="table-avatar d-flex align-items-center">
			<a href="#" class="profile-split d-flex flex-column"><?php echo $user_row["name"] ?> <span><?php echo $user_row["job_title"] ?></span></a></h2>
		</td>
		<td><?php echo $user_row["phone"] ?></td>
		<td><?php echo $user_row["email"] ?></td>
		
		<td><?php echo $user_row["street"] ?> <?php echo $user_row["city"] ?> <?php echo $user_row["state"] ?></td>
		
		
		<td><ul class="social-links d-flex align-items-center"><li><a href="#"><i class="ti ti-mail"></i></a></li><li><a href="#"><i class="ti ti-phone-check"></i></a></li><li><a href="#"><i class="ti ti-message-circle-share"></i></a></li><li><a href="#"><i class="ti ti-brand-skype"></i></a></li><li><a href="#"><i class="ti ti-brand-facebook "></i></a></li></ul></td>
		<td><span class="badge badge-pill badge-status bg-success">Active</span></td>
		<td>
			<div class="dropdown table-action">
				<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
			<i class="fa fa-ellipsis-v"></i></a>
			<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item edit-popup" 
data-bs-toggle="modal" 
data-bs-target="#edit-po"  
data-userid="<?php echo $user_row["id"] ?>"
data-name="<?php echo $user_row["name"] ?>"
data-lname="<?php echo $user_row["lname"] ?>"
data-username="<?php echo $user_row["username"] ?>"
data-password="<?php echo $user_row["password"] ?>"
data-email="<?php echo $user_row["email"] ?>"
data-skype="<?php echo $user_row["skype"] ?>"
data-phone="<?php echo $user_row["phone"] ?>"
data-bio="<?php echo $user_row["bio"] ?>"
data-role="<?php echo $user_row["role"] ?>"
data-jobtitle="<?php echo $user_row["job_title"] ?>"
data-phone2="<?php echo $user_row["phone2"] ?>"
data-fax="<?php echo $user_row["fax"] ?>"
data-team="<?php echo $user_row["team_leader"] ?>"
data-description="<?php echo $user_row["description"] ?>"
data-street="<?php echo $user_row["street"] ?>"
data-address="<?php echo $user_row["address"] ?>"
data-city="<?php echo $user_row["city"] ?>"
data-state="<?php echo $user_row["state"] ?>"
data-country="<?php echo $user_row["country"] ?>"
data-zipcode="<?php echo $user_row["zipcode"] ?>"
data-profile="<?php echo $user_row["profile"] ?>"
>
					<i class="ti ti-edit text-blue"></i> Edit</a>
					<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact" data-userid="<?php echo $user_row["id"] ?>" data-username="<?php echo $user_row["name"] ?>"><i class="ti ti-trash text-danger"></i> Delete</a>
					<a class="dropdown-item" href="contact-details.html"><i class="ti ti-eye text-blue-light"></i> Preview</a></div></div></td>
	</tr>
		<?php
	}
}


?>