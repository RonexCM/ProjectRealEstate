<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login.css">

<!--	Title
	=========================================================-->
<title>Real Estate PHP</title>
</head>
<style>
    .filter {
    width: 7rem;
    padding: 10px 15px;
    text-align: center;
}
.filter-container {
    position: absolute;
    right: 0;
    top: 0rem;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.filter-container a{
    font-weight:bold;
    color:black;
}
}
</style>
<body>
<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>User Booked Property</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User Booked Property</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                
                
            </div>
        </div>
         <!--	Banner   --->
		 
		 <?php
         $activeStyle = "color: black;font-weight: bold;background: #e5e5e5;-webkit-box-shadow: inset 0px 0px 5px #c1c1c1;-moz-box-shadow: inset 0px 0px 5px #c1c1c1;box-shadow: inset 0px 0px 5px #c1c1c1;outline: none;"
         ?>
		<!--	Submit property   -->
        <div class="full-row bg-gray">
            <div class="container"><!-- FOR MORE PROJECTS visit: codeastro.com -->
                    <div class="row mb-5">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">User Booked Property</h2>
                            <div class="filter-container d-flex">
                                <a href="bookedProperty.php?category=property" style="<?php if ($_GET['category']=="property"){echo $activeStyle;}?>" ><div class="filter">Property</div></a>
                                <a href="bookedProperty.php?category=rent" style="<?php if ($_GET['category']=="rent"){echo $activeStyle;}?>" ><div class="filter">Rent</div></a>
                            </div>
							<?php 
								if(isset($_GET['msg']))	
								echo $_GET['msg'];	
							?>
                        </div>
					</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
                    <?php
                    if ($_GET['category']=="property"){?>
                        <table class="items-list col-lg-12 table-hover" style="border-collapse:inherit;">
                        <thead style="text-align:center;">
                             <tr  class="bg-dark">
                                <th class="text-white font-weight-bolder">Properties</th>
                                <th class="text-white font-weight-bolder">Type</th>
                                <th class="text-white font-weight-bolder">Price</th>
                                <th class="text-white font-weight-bolder">Bought Date</th>
                             </tr>
                        </thead>
                        <tbody style="text-align:center;">
						<!-- FOR MORE PROJECTS visit: codeastro.com -->
							<?php 

							$uid=$_SESSION['uid'];
							$query=mysqli_query($con,"SELECT * FROM `sales` WHERE uid='$uid'");// sales table bata user le kineko row laii select gareko
								while($rowSales=mysqli_fetch_array($query))
								{
                                    $id = $rowSales['pid']; // tyo row bata property ko id laii euta variable ma store gareko
                                    $query2=mysqli_query($con,"SELECT * FROM `property` WHERE pid='$id'"); // property table bata match bhako property haruu list out gareko
                                    while($rowProperty=mysqli_fetch_array($query2))
								    {
							?>
                                    <tr>
                                        <td>
                                            <img src="admin/property/<?php echo $rowProperty['18'];?>" alt="pimage">
                                            <div class="property-info d-table">
                                                <h5 class="text-secondary text-capitalize"><a href="propertydetail.php?pid=<?php echo $rowProperty['0'];?>"><?php echo $rowProperty['1'];?></a></h5>
                                                <span class="font-14 text-capitalize"><i class="fas fa-map-marker-alt text-success font-13"></i>&nbsp; <?php echo $rowProperty['14'];?></span>
                                                <div class="price mt-3">
                                                    <span class="text-success">Rs.&nbsp;<?php echo $rowProperty['13'];?></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-capitalize"><?php echo $rowSales['type'];?></td>
                                        <td class="text-capitalize">Rs. <?php echo $rowSales['price'];?></td>
                                        <td class="text-capitalize"><?php echo $rowSales['date'];?></td>
                                    </tr>
							<?php }
                        } ?>
							<!-- FOR MORE PROJECTS visit: codeastro.com -->
                        </tbody>
                    </table> <?php
                    }
                    else{?>
                        <table class="items-list col-lg-12 table-hover" style="border-collapse:inherit;">
                        <thead style="text-align:center;">
                             <tr  class="bg-dark">
                                <th class="text-white font-weight-bolder">Properties</th>
                                <th class="text-white font-weight-bolder">Type</th>
                                <th class="text-white font-weight-bolder">Rented Floor Number</th>
                                <th class="text-white font-weight-bolder">Price / month</th>
                             </tr>
                        </thead>
                        <tbody style="text-align:center;">
						<!-- FOR MORE PROJECTS visit: codeastro.com -->
							<?php 

							$uid=$_SESSION['uid'];
							$query=mysqli_query($con,"SELECT * FROM `rentfloor` WHERE uid='$uid'");// sales table bata user le kineko row laii select gareko
								while($rowSales=mysqli_fetch_array($query))
								{
                                    $id = $rowSales['pid']; // tyo row bata property ko id laii euta variable ma store gareko
                                    $query2=mysqli_query($con,"SELECT * FROM `property` WHERE pid='$id'"); // property table bata match bhako property haruu list out gareko
                                    while($rowProperty=mysqli_fetch_array($query2))
								    {
							?>
                                    <tr>
                                        <td>
                                            <img src="admin/property/<?php echo $rowProperty['18'];?>" alt="pimage">
                                            <div class="property-info d-table">
                                                <h5 class="text-secondary text-capitalize"><a href="propertydetail.php?pid=<?php echo $rowProperty['0'];?>"><?php echo $rowProperty['1'];?></a></h5>
                                                <span class="font-14 text-capitalize"><i class="fas fa-map-marker-alt text-success font-13"></i>&nbsp; <?php echo $rowProperty['14'];?></span>
                                                <div class="price mt-3">
                                                    <span class="text-success">Rs.&nbsp;<?php echo $rowProperty['13'];?></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-capitalize"><?php echo $rowProperty['stype'];?></td>
                                        <td class="text-capitalize"><?php echo $rowSales['floor'];?></td>
                                        <td class="text-capitalize">Rs. <?php echo $rowProperty['price'];?></td>
                                    </tr>
							<?php }
                        } ?>
							<!-- FOR MORE PROJECTS visit: codeastro.com -->
                        </tbody>
                    </table><?php
                    }
                    ?>
					           
            </div>
        </div>
	<!--	Submit property   -->
        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>