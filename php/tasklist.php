<?php
ob_start();
include_once("config.php");

if (isset($_POST['input'])) {
	$input = $_POST['input'];

	$sql21 = "SELECT * FROM task WHERE `title` LIKE '%{$input}%' OR `description` LIKE '%{$input}%'";
$result21 = mysqli_query($conn, $sql21);
// if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_assoc($result21)) {
		
	 ?>
<li class="task-wrap pending" >
<div class="task-info">
<span class="task-icon"><i class="ti ti-grip-vertical"></i></span>
<div class="task-checkbox">
<label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
</div>
<div class="set-star rating-select">
<i class="fa fa-star"></i>
</div><a href="task-details.php?ticket=<?=$row["task_ticket"]?>">
<p><?php echo $row["title"] ?></p></a>

<span class="badge badge-pill badge-status bg-green"></i><?php echo $row["priority"] ?></span>
<span class="badge badge-tag bg-pending"><?php echo $row["status"] ?></span>
</div>
<div class="task-actions">
<ul>
<li class="task-time">
<span class="badge badge-tag badge-purple-light"><?php 
$cat_id= $row["project_id"];
$cat_find = "SELECT * FROM projects where project_id='$cat_id'";
$cat_result = mysqli_query($conn, $cat_find);
$row_cat = mysqli_fetch_array($cat_result);
echo $row_cat["project_name"];
 ?></span>
</li>
<li class="task-date">
<i class="ti ti-calendar-exclamation"></i><?php echo $row["start_date"] ?>
</li>
<li class="task-owner">
<div class="task-user">
	<?php
	$task_tikets = $row["task_ticket"] ;
$find_user = "SELECT * FROM assign_task where task_ticket='$task_tikets'";
$result = mysqli_query($conn,$find_user);
while ($row_find_user=mysqli_fetch_assoc($result)) {
	$emp_ids = $row_find_user["emp_id"];
	$find_emp_name = "SELECT * FROM admin where id= '$emp_ids'";
	$find_emp_name_result = mysqli_query($conn, $find_emp_name);
	$find_name_rows = mysqli_fetch_assoc($find_emp_name_result);

	?>

<img src="assets/img/profiles/avatar-14.jpg" alt="img" title="<?php echo $find_name_rows["name"] ?>">
<?php }; ?>

</div>
<div class="dropdown table-action">
<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
<i class="fa fa-ellipsis-v"></i>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item edit-popup" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
<a class="dropdown-item" href="#" data-bs-toggle="modal" data-taskid="<?=$row["task_id"] ?>" data-taskticket="<?=$row["task_ticket"] ?>" data-taskname="<?=$row["title"]?>" data-bs-target="#delete_activity"><i class="ti ti-trash text-danger"></i> Delete</a>
</div>
</div>
</li>
</ul>
</div>
</li>
<?php }};?>