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

if(isset($_POST['approve']))
{
    $status = $_POST['approve'];
    $id = $_GET['pid'];
    $sql = "UPDATE property SET approvalStatus = 'Approved' WHERE pid = $id";
    $result = $con->query($sql);
    if($result){
        header("Location:dashboard.php?msg=1");
    }
}
if(isset($_POST['disapprove']))
{
    $status = $_POST['approve'];
    $id = $_GET['pid'];
    $sql = "UPDATE property SET approvalStatus = 'Disapproved' WHERE pid = $id";
    $result = $con->query($sql);
    if($result){
        header("Location:dashboard.php?msg=2");
    }
    
}
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
        <link rel="stylesheet" href="assets/css/style2.css">
		
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
                                <form method="post">
                                    <div class="form-group d-flex" style = "position: absolute;top: 0;right: 30px;">
                                        <button type="submit" name="approve" class="btn btn-success w-100 mx-3">Approve</button>
                                        <button type="submit" name="disapprove" class="btn btn-danger w-100">Disapprove</button>
                                    </div>
                                </form>
							</div>
						</div>
					</div>
					<div class="full-row">
            <div class="container">
                <div class="row"><!-- FOR MORE PROJECTS visit: codeastro.com -->
				
					<?php
						$id=$_REQUEST['pid']; 
						$query=mysqli_query($con,"SELECT property.*, user.* FROM `property`,`user` WHERE property.uid=user.uid and pid='$id'");
						while($row=mysqli_fetch_array($query))
						{
					  ?>
				  
                    <div class="col-lg-8">

                        <div class="row">
                            <div class="col-md-12">
                                <div id="single-property" style="width:1200px; height:700px; margin:30px auto 50px;"> 
                                    <!-- Slide 1-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="property/<?php echo $row['18'];?>" class="ls-bg" alt="" /> </div>
                                    <!-- Slide 2-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="property/<?php echo $row['19'];?>" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 3-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="property/<?php echo $row['20'];?>" class="ls-bg" alt="" /> </div>
									
									<!-- Slide 4-->
									<div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="property/<?php echo $row['21'];?>" class="ls-bg" alt="" /> </div>
									
									<!-- Slide 5-->
									<div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="property/<?php echo $row['22'];?>" class="ls-bg" alt="" /> </div>
                                </div>
                            </div>
                        </div><!-- FOR MORE PROJECTS visit: codeastro.com -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="bg-success d-table px-3 py-2 rounded text-white text-capitalize">For <?php echo $row['5'];?></div>
                                <h5 class="mt-2 text-secondary text-capitalize"><?php echo $row['1'];?></h5>
                                <span class="mb-sm-20 d-block text-capitalize"><i class="fas fa-map-marker-alt text-success font-12"></i> &nbsp;<?php echo $row['14'];?></span>
							</div>
                            <div class="col-md-6">
                                <div class="text-success text-left h5 my-2 text-md-right">$<?php echo $row['13'];?></div>
                                <div class="text-left text-md-right">Price</div>
                            </div>
                        </div>
                        <div class="property-details">
                        <div  class="table-striped font-14 pb-2">
                                    <table class="w-100">
                                        <tbody>
                                            <tr>
                                                <td>Sqft :</td>
                                                <td class="text-capitalize"><?php echo $row['12'];?></td>
                                                <td>Bedroom :</td>
                                                <td class="text-capitalize"><?php echo $row['6'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Bathroom :</td>
                                                <td class="text-capitalize"><?php echo $row['7'];?></td>
                                                <td>Balcony :</td>
                                                <td class="text-capitalize"><?php echo $row['8'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Hall :</td>
                                                <td class="text-capitalize"><?php echo $row['10'];?></td>
                                                <td>Kitchen :</td>
                                                <td class="text-capitalize"><?php echo $row['9'];?></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            <h4 class="text-secondary my-4">Description</h4>
                            <p><?php echo $row['2'];?></p>
                            
                            <h5 class="mt-5 mb-4 text-secondary">Property Summary</h5>
                            <div  class="table-striped font-14 pb-2">
                                <table class="w-100"><!-- FOR MORE PROJECTS visit: codeastro.com -->
                                    <tbody>
                                        <tr>
                                            <td>BHK :</td>
                                            <td class="text-capitalize"><?php echo $row['4'];?></td>
                                            <td>Property Type :</td>
                                            <td class="text-capitalize"><?php echo $row['3'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Floor :</td>
                                            <td class="text-capitalize"><?php echo $row['11'];?></td>
                                            <td>Total Floor :</td>
                                            <td class="text-capitalize"><?php echo $row['28'];?></td>
                                        </tr>
                                        <tr>
                                            <td>City :</td>
                                            <td class="text-capitalize"><?php echo $row['15'];?></td>
                                            <td>State :</td>
                                            <td class="text-capitalize"><?php echo $row['16'];?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <h5 class="mt-5 mb-4 text-secondary">Features</h5>
                            <div class="row">
								<?php echo $row['17'];?>
								
                            </div>   
							<!-- FOR MORE PROJECTS visit: codeastro.com -->
                            <h5 class="mt-5 mb-4 text-secondary">Floor Plans</h5>
                            <div class="accordion" id="accordionExample">
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Floor Plans </button>
                                <div id="collapseOne" class="collapse show p-4" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <img src="property/<?php echo $row['25'];?>" alt="Not Available" style="width:100%"> </div>
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Basement Floor</button>
                                <div id="collapseTwo" class="collapse p-4" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <img src="property/<?php echo $row['26'];?>" alt="Not Available" style="width:100%"> </div>
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Ground Floor</button>
                                <div id="collapseThree" class="collapse p-4" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <img src="property/<?php echo $row['27'];?>" alt="Not Available" style="width:100%"> </div>
                            </div>

                            <h5 class="mt-5 mb-4 text-secondary double-down-line-left position-relative">Contact Agent</h5>
                            <div class="agent-contact pt-60">
                                <div class="row">
                                    
                                    <div class="col-sm-4 col-lg-3"> <img src="user/<?php echo $row['uimage']; ?>" alt="" height="200" width="170"> </div>
                                    <div class="col-sm-8 col-lg-9">
                                        <div class="agent-data text-ordinary mt-sm-20">
                                            <h6 class="text-success text-capitalize"><?php echo $row['uname'];?></h6>
                                            <ul class="mb-3" style="list-style-type:none;">
                                                <li><?php echo $row['uphone'];?></li>
                                                <li><?php echo $row['uemail'];?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- FOR MORE PROJECTS visit: codeastro.com -->
                                </div>
                            </div>
                        </div>
                    </div>
					
					<?php } ?>
					
                    <div class="col-lg-4">
                        <!-- <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4 mt-md-50">Send Message</h4>
                        <form method="post" action="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Phone">
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
										<textarea class="form-control" placeholder="Enter Message"></textarea>
                                    </div>
                                </div>
								
                                <div class="col-md-12">
                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-success w-100">Search Property</button>
                                    </div>
                                </div>
                            </div>
                        </form> -->

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
		<script src="js/jquery.min.js"></script> 
        <!--jQuery Layer Slider --> 
        <script src="../js/greensock.js"></script> 
        <script src="../js/layerslider.transitions.js"></script> 
        <script src="../js/layerslider.kreaturamedia.jquery.js"></script> 
        <!--jQuery Layer Slider --> 
        <script src="../js/popper.min.js"></script> 
        <script src="../js/bootstrap.min.js"></script> 
        <script src="../js/owl.carousel.min.js"></script> 
        <script src="../js/tmpl.js"></script> 
        <script src="../js/jquery.dependClass-0.1.js"></script> 
        <script src="../js/draggable-0.1.js"></script> 
        <script src="../js/jquery.slider.js"></script> 
        <script src="../js/wow.js"></script> 
        <script src="../js/custom.js"></script> 
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

</html>