<?php
session_start();
ob_start();

if (isset($_SESSION['name'])) {
  
 } else{
//   header("Location:login.php");
  echo "Session not set";
  echo "<script>";
  echo "window.location.href = 'login.php'";
  echo "</script>";
 }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Keeninsite-CRM</title>
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
<script src="https://cdn.tiny.cloud/1/v6edcpl9bl0acbvq9pl684uq2qeh0ienjq9istj802ofpl78/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>


<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/tabler-icons/tabler-icons.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/plugins/summernote/summernote-lite.min.css">

<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<style type="text/css">
    .form-control {
    border-color: #ffffff !important;
    color: #6F6F6F;
    background-color: #ffffff;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.6;
    border-radius: 5px;
    padding: 0.5rem 0.85rem;
    /* box-shadow: 0px 4px 4px 0px rgba(219, 219, 219, 0.2509803922); */
    min-height: 42px;
}
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
   
    display: block !important;
    
}
 table ul li {
    display: inline-block;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice {
    display: inline-block;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #e4e4e4;
    border: 1px solid #aaa;
    border-radius: 4px;
    box-sizing: border-box;
    display: inline-block !important;
    margin-left: 5px;
    margin-top: 5px;
    padding: 0;
    padding-left: 20px;
    position: relative;
    max-width: 23%;
    overflow: hidden;
    /* display: inline !important; */
    text-overflow: ellipsis;
    vertical-align: bottom;
    white-space: nowrap;
}
td {
    border:1px solid #dedede;
}
.table th:nth-child(1), .table td:nth-child(1) { width: 100px; } /* Profile */
        .table th:nth-child(2), .table td:nth-child(2) { min-width: 200px; } /* Account */
        .table th:nth-child(3), .table td:nth-child(3) { min-width: 200px; } /* Analyst */
        .table th:nth-child(4), .table td:nth-child(4) { min-width: 200px; } /* Last 30 Spend */
        .table th:nth-child(5), .table td:nth-child(5) { min-width: 200px; } /* Click When Launched */
        .table th:nth-child(6), .table td:nth-child(6) { min-width: 200px; } /* Perf Chk */
        .table th:nth-child(7), .table td:nth-child(7) { min-width: 200px; } /* KW Analysis */
        .table th:nth-child(8), .table td:nth-child(8) { min-width: 200px; } /* Highlights Emailed */
</style>

<?php include_once("common/head.php") ?>
<body>

<div class="main-wrapper">
<?php include_once("common/preloader.php"); ?>

<?php include_once("common/header.php") ?>


<?php include_once("common/sidebar.php");


 ?>



<div class="page-wrapper">
<div class="content">
<div class="row">
<div class="col-md-12 mx-auto">

<div class="page-header">
<div class="row align-items-center">
<div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table  datanew ">
                                        <thead>
                                            <tr>
                                                <th>Account</th>
                                                <th >Analyst</th>
                                                <th>On-site <br> Maintinance <br> Performed</th>
                                                <th>Account Review</th>
                                                <th>Keyword Research</th>
                                                <th>Intro Call</th>
                                                <th>Analytics Tracking</th>
                                                <th>Campaign Deliverable<br> Audit Performed</th>
                                                <th>KW Approval</th>
                                                <th>Report Creation</th>
                                                <th>Monthly Followup</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            include 'php/config.php';
                                            $fetch_seo = "SELECT * FROM seo_report";
                                            $result = mysqli_query($conn,$fetch_seo);
                                            $number_reusult = mysqli_num_rows($result);
                                           while($row= mysqli_fetch_assoc($result))
                                           {
                                              $options = explode(", ", $row['on_site_maintinance_status']);
                                              $options1 = explode(", ", $row['account_review_status']);
                                              $options2 = explode(", ", $row['keyword_research_status']);
                                              $options3 = explode(", ", $row['intro_call_status']);
                                              $options4 = explode(", ", $row['analytics_tracking_status']);
                                              $options5 = explode(", ", $row['campaign_deliverable_status']);
                                              $options6 = explode(", ", $row['kw_approval_status']);
                                              $options7 = explode(", ", $row['report_creation_status']);


    // Images array (Assign images manually)
    $images = [
        "1" => "assets/img/flags/flag_green.png",
        "2" => "assets/img/flags/flag_red.png",
        "3" => "assets/img/flags/maintinance.png",
        "4" => "assets/img/flags/danger.png"
    ];
                                            ?>
                                            <tr>
                                                <td><?=$row['account']?></td>
                                                <td><?=$row['analyst']?></td>
                                                <td><p>70</p>

                                                    <?php 

                                                    if (!empty($row['on_site_maintinance_status'])) {
                                                     echo "<ul>";
                                                     foreach ($options as $option) {
       
        echo "<li>";
        echo "<img src='" . $images[$option] . "' alt='$option'>";
        echo "</li>";
        
    }
    echo "</ul>";
}else{
    echo "N/A";
}
    ?>
                                                   <!--  <ul>
                                                        <li><img src="assets/img/flags/flag_green.png"></li>
                                                        <li><img src="assets/img/flags/flag_green.png"></li>
                                                        <li><img src="assets/img/flags/flag_green.png"></li>
                                                        <li><img src="assets/img/flags/flag_green.png"></li>

                                                    </ul> --></td>


                                                <td><p>70</p>

                                                    <?php 
                                                    if (!empty($row['account_review_status'])) {
                                                     echo "<ul>";
                                                     foreach ($options1 as $acc_riview) {
       
        echo "<li>";
        echo "<img src='" . $images[$acc_riview] . "' alt='$acc_riview'>";
        echo "</li>";
        
    }
    echo "</ul>";
}else{

    echo "N/A";
}
    ?></td>



                                                   <td><p>70</p>

                                                    <?php 
                                                    if (!empty($row['keyword_research_status'])) {
                                                     echo "<ul>";
                                                     foreach ($options2 as $keyword_research) {
       
        echo "<li>";
        echo "<img src='" . $images[$keyword_research] . "' alt='$keyword_research'>";
        echo "</li>";
        
    }
    echo "</ul>";
}else{

    echo "N/A";
}
    ?></td>


                                                   <td><p>70</p>

                                                    <?php 
                                                    if (!empty($row['intro_call_status'])) {
                                                     echo "<ul>";
                                                     foreach ($options3 as $intro_call) {
       
        echo "<li>";
        echo "<img src='" . $images[$intro_call] . "' alt='$intro_call'>";
        echo "</li>";
        
    }
    echo "</ul>";
}else{

    echo "N/A";
}
    ?></td>



                                                    <td><p>70</p>

                                                    <?php 
                                                    if (!empty($row['analytics_tracking_status'])) {
                                                     echo "<ul>";
                                                     foreach ($options4 as $analytics_tracki) {
       
        echo "<li>";
        echo "<img src='" . $images[$analytics_tracki] . "' alt='$analytics_tracki'>";
        echo "</li>";
        
    }
    echo "</ul>";
}else{

    echo "N/A";
}
    ?></td>



                                                    <td><p>70</p>

                                                    <?php 
                                                    if (!empty($row['campaign_deliverable_status'])) {
                                                     echo "<ul>";
                                                     foreach ($options5 as $campaign_deli) {
       
        echo "<li>";
        echo "<img src='" . $images[$campaign_deli] . "' alt='$campaign_deli'>";
        echo "</li>";
        
    }
    echo "</ul>";
}else{

    echo "N/A";
}
    ?></td>




                                                   <td><p>70</p>

                                                    <?php 
                                                    if (!empty($row['kw_approval_status'])) {
                                                     echo "<ul>";
                                                     foreach ($options6 as $kw_app) {
       
        echo "<li>";
        echo "<img src='" . $images[$kw_app] . "' alt='$kw_app'>";
        echo "</li>";
        
    }
    echo "</ul>";
}else{

    echo "N/A";
}
    ?></td>


                                                     <td><p>70</p>

                                                    <?php 
                                                    if (!empty($row['report_creation_status'])) {
                                                     echo "<ul>";
                                                     foreach ($options7 as $report_creat) {
       
        echo "<li>";
        echo "<img src='" . $images[$report_creat] . "' alt='$report_creat'>";
        echo "</li>";
        
    }
    echo "</ul>";
}else{

    echo "N/A";
}
    ?></td>


                                                    <td><p>70</p>
                                                    <ul>
                                                        <li><img src="assets/img/flags/flag_green.png"></li>
                                                        <li><img src="assets/img/flags/flag_green.png"></li>
                                                        <li><img src="assets/img/flags/flag_green.png"></li>
                                                        <li><img src="assets/img/flags/flag_green.png"></li>

                                                    </ul></td>

                                                    <td><a href="edit-seo-report.php">Edit</a>
                                                    </td>

                                            </tr>
                                        <?php }; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
}
</div>
</div>

<script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>

<script src="assets/js/feather.min.js" type="text/javascript"></script>

<script src="assets/js/jquery.slimscroll.min.js" type="text/javascript"></script>

<script src="assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="assets/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>

<script src="assets/js/moment.min.js" type="text/javascript"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

<script src="assets/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="text/javascript"></script>

<script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>

<script src="assets/plugins/summernote/summernote-lite.min.js" type="text/javascript"></script>

<script src="assets/js/jsonscript.js" type="text/javascript"></script>
</body>
</html>