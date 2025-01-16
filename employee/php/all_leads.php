<?php
include_once("config.php");

if (isset($_POST['input'])) {
	$input = $_POST['input'];

	$query = "SELECT * FROM leads";
	$result = mysqli_query($conn, $query);
	while ($row = mysqli_fetch_assoc($result)) {
		?>


<tr class="<?php echo $class ?>">
<td class="sorting_1">
	<label class="checkboxs">
		<input type="checkbox">
		<span class="checkmarks"></span>
	</label>
</td>
<td>
	<div class="set-star rating-select">
		<i class="fa fa-star"></i></div>
	</td>
	<td><?php echo $row["leads_name"] ?></td>
	<td><?php echo $row["leads_company_name"] ?></td>
	<td><?php echo $row["leads_phone"] ?></td>
	<td><?php echo $row["leads_email"] ?></td>
	<td><span class="badge badge-pill badge-status bg-success"><?php echo $row["leads_status"] ?></span></td>
	<td><?php echo $row["leads_date"] ?></td>
	<td><span class="title-name"><?php echo $row["leads_owner"] ?></span></td>
	<td><div class="dropdown table-action"><a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		<div class="dropdown-menu dropdown-menu-right">
		<a class="dropdown-item edit-popup"

data-bs-toggle="modal" 
data-bs-target="#edit-po"  
data-leadsemail="<?php echo $row["leads_email"] ?>"
data-leadsid="<?php echo $row["leads_id"] ?>"
data-leadsname="<?php echo $row["leads_name"] ?>"
data-leadstype="<?php echo $row["leads_type"] ?>"
data-leadscompanyname="<?php echo $row["leads_company_name"] ?>"
data-leadscompanyid="<?php echo $row["leads_company_id"] ?>"
data-leadsvalue="<?php echo $row["leads_value"] ?>"
data-leadscurrency="<?php echo $row["leads_currency"] ?>"
data-leadsource="<?php echo $row["leads_source"] ?>"
data-leadsphone="<?php echo $row["leads_phone"] ?>"

data-leadsindustry="<?php echo $row["leads_industry"] ?>"
data-leadsowner="<?php echo $row["leads_owner"] ?>"
data-leadsdescription="<?php echo $row["leads_description"] ?>"
data-leadsstatus="<?php echo $row["leads_status"] ?>"
data-leadstags="<?php echo $row["leads_tags"] ?>"



		><i class="ti ti-edit text-blue"></i> Edit</a>
		<a class="dropdown-item" href="#" data-bs-toggle="modal" data-userid="<?php echo $row["leads_id"] ?>" data-leadsname="<?php echo $row["leads_name"] ?>" data-bs-target="#delete_contact">
				<i class="ti ti-trash text-danger"></i> Delete
			</a>

		</div></div>
	</td>
</tr>


		<?php
	}
}


?>