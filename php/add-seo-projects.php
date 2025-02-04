<?php

ob_start();
include_once("config.php");
if (isset($_POST['submit'])) {
$account = $_POST['account'];
$analyst = $_POST['analyst'];
$onsite_maintinance = $_POST['onsite_maintinance'];
$maintinance_status = $_POST['maintinance'];
 $options_maintinace_status = implode(", ", $maintinance_status);




 $account_review = $_POST['account_review'];
$account_review_status = $_POST['account_review_status'];
 $account_review_status_final = implode(", ", $account_review_status);





 $keyword_research = $_POST['keyword_research'];
$keyword_research_status = $_POST['maintinance'];
 $keyword_research_status_final = implode(", ", $keyword_research_status);




 $introcall = $_POST['introcall'];
$introcall_status = $_POST['introcall_status'];
 $introcall_status_final = implode(", ", $introcall_status);



 $analytics_tacking = $_POST['analytics_tacking'];
$analytics_tacking_status = $_POST['analytics_tacking_status'];
 $options_maintinace_status = implode(", ", $analytics_tacking_status);



 $campaign_deliverable = $_POST['campaign_deliverable'];
$campaign_deliverable_status = $_POST['campaign_deliverable_status'];
 $campaign_deliverable_status_final = implode(", ", $campaign_deliverable_status);



 $kw_approval = $_POST['kw_approval'];
$kw_approval_status = $_POST['kw_approval_status'];
 $kw_approval_status_final = implode(", ", $kw_approval_status);


 $report_creation = $_POST['report_creation'];
$report_creation_status = $_POST['report_creation_status'];
 $report_creation_status_final = implode(", ", $report_creation_status);

	$sql = "INSERT INTO `seo_report` ( `account`, `analyst`,`on_site_maintinance`,`on_site_maintinance_status`,`account_review`,`account_review_status`,`keyword_research`,`keyword_research_status`,`intro_call`,`intro_call_status`,`analytics_tracking`,`analytics_tracking_status`,`campaign_deliverable`,`campaign_deliverable_status`,`kw_approval`,`kw_approval_status`,`report_creation`,`report_creation_status`) VALUES ('$account', '$analyst', '$onsite_maintinance','$options_maintinace_status','$account_review','$account_review_status_final','$keyword_research','$keyword_research_status_final','$introcall','$introcall_status_final','$analytics_tacking','$options_maintinace_status','$campaign_deliverable','$campaign_deliverable_status_final','$kw_approval','$kw_approval_status_final','$report_creation','$report_creation_status_final')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		header("Location:../seo-report.php?ticket=$taskticket");
	}
}
ob_flush();

?>