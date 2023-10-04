<?php
session_start();
require("config.php");
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}

//// code insert
//// add code
$error="";
$msg="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>LM HOMES | Property</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
			<!-- Header -->
			<?php include("header.php"); ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Property</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Property</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
                    <!--	Recent Properties  -->
                    <div class="full-row">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12"><!-- FOR MORE PROJECTS visit: codeastro.com -->
                                    <div class="tab-content mt-4" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                            <div class="row">
                                            
                                                <?php $query=mysqli_query($con,"SELECT property.*, user.uname,user.utype,user.uimage FROM `property`,`user` WHERE property.uid=user.uid AND approvalStatus = 'Pending'");
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                                ?>
                                                <div class="col-md-6  "><!-- FOR MORE PROJECTS visit: codeastro.com -->
                                                    <div class="card" style="width: 21rem;">
                                                    <img src="property/<?php echo $row['18'];?>" alt="pimage" class="card-img-top">
                                                        <div class="card-body p-0">
                                                            <div class="featured-thumb-data shadow-one">
                                                                <div class="p-3">
                                                                    <h5 class="text-secondary hover-text-success mb-2 text-capitalize"><a href="adminpropertydetail.php?pid=<?php echo $row['0'];?>"  style="color:black;"><?php echo $row['1'];?></a></h5>
                                                                    <span class="location text-capitalize" style ="color:#74777b;"><i class="fas fa-map-marker-alt text-success"></i> &nbsp;<?php echo $row['14'];?></span> </div>
                                                                <div class="bg-gray pt-3 info"style="background:#f5f5f5;background: #f5f5f5;padding: 4px 30px;">
                                                                    <ul style="list-style-type: none;display: flex;padding: 0;">
                                                                        <li style = "margin-right: 12px;"><span style = "display:block;"><?php echo $row['12'];?></span> Sqft</li>
                                                                        <li style = "margin-right: 12px;"><span style = "display:block;"><?php echo $row['6'];?></span> Beds</li>
                                                                        <li style = "margin-right: 12px;"><span style = "display:block;"><?php echo $row['7'];?></span> Baths</li>
                                                                        <li style = "margin-right: 12px;"><span style = "display:block;"><?php echo $row['9'];?></span> Kitchen</li>
                                                                        <li style = "margin-right: 12px;"><span style = "display:block;"><?php echo $row['8'];?></span> Balcony</li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                                <div class="p-4 d-inline-block w-100">
                                                                    <div class="float-left text-capitalize"><i class="fas fa-user text-success mr-1"></i>By : <?php echo $row['uname'];?></div>
                                                                    <div class="float-right"><i class="far fa-calendar-alt text-success mr-1"></i> <?php echo date('d-m-Y', strtotime($row['date']));?></div> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                </div>
                                                <?php } ?>

                                            </div>
                                        </div>
                                        
                                        
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>			
			</div>
			<!-- /Main Wrapper -->

		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		<script src="assets/plugins/tinymce/tinymce.min.js"></script>
		<script src="assets/plugins/tinymce/init-tinymce.min.js"></script>
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

</html>