	<?php 
	ob_start();
include_once("config.php");

if (isset($_POST['input'])) {
	$input = $_POST['input'];

	$sql = "SELECT * FROM projects WHERE `project_name` LIKE '%{$input}%'";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) {
		// code...
	
	?>
	<tr class="odd">
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
			
				
				<a href="project-task-list.php?id=<?=$row["project_id"]?>" class="profile-split d-flex flex-column"><?= $row["project_name"]?></a>
			
		</td>
		<td>
			<h2 class="table-avatar d-flex align-items-center">
				
				<a href="#" class="profile-split d-flex flex-column"><?php 
$cidsjs = $row["client_name"];
$fetchcli = "SELECT * FROM clients where id='$cidsjs'";
$clie_result_show = mysqli_query($conn,$fetchcli);
$clitiprow = mysqli_fetch_assoc($clie_result_show) ;
echo $clitiprow["company"];
				 ?></a>
			</h2>
		</td>
		<td>
			<span class="priority badge badge-tag badge-danger-light">
				<i class="ti ti-square-rounded-filled"></i><?= $row["priority"]?>
			</span>
		</td>
		<td><?= $row["start_date"]?></td>
		<td><?= $row["due_date"]?></td>
		<td><?= $row["project_type"]?></td>
		
		<td>
			<span class="badge badge-pill badge-status bg-success"><?= $row["status"]?></span>
		</td>
		<td>
			<div class="dropdown table-action">
				<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
				<div class="dropdown-menu dropdown-menu-right">
					<!-- <a class="dropdown-item edit-popup" 
					data-bs-toggle="modal" 
data-bs-target="#edit-po"  
data-projectid="<?php echo $row["project_id"] ?>"
data-projectname="<?php echo $row["project_name"] ?>"
data-projectno="<?php echo $row["project_no"] ?>"
data-projecttype="<?php echo $row["project_type"] ?>"
data-clientname="<?php echo $row["client_name"] ?>"
data-clientid="<?php echo $row["client_id"] ?>"
data-projecttiming="<?php echo $row["project_timing"] ?>"
data-price="<?php echo $row["price"] ?>"
data-amount="<?php echo $row["amount"] ?>"
data-total="<?php echo $row["total"] ?>"
data-responsibleperson="<?php echo $row["responsible_person"] ?>"

data-teamleader="<?php echo $row["team_leader"] ?>"
data-startdate="<?php echo $row["start_date"] ?>"
data-duedate="<?php echo $row["due_date"] ?>"
data-status="<?php echo $row["status"] ?>"
data-description="<?php echo $row["description"] ?>"

					><i class="ti ti-edit text-blue"></i> Edit</a> -->
					<a class="dropdown-item" href="#" data-bs-toggle="modal" data-projectid="<?php echo $row["project_id"] ?>" data-projectname="<?php echo $row["project_name"] ?>" data-bs-target="#delete_contact" ><i class="ti ti-trash text-danger"></i> Delete</a>
					
					<!-- <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-subtask"></i> Add New Task</a> -->
				</div>
			</div>
		</td>
	</tr>
<?php }}; ?>