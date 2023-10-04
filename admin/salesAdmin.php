<?php
session_start();
require("config.php");
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>LM Homes | Admin</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/responsive.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/select.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/buttons.bootstrap4.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
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
</style>
    <body>
	
		<!-- Main Wrapper -->
		
		
			<!-- Header -->
				<?php include("header.php"); ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				<?php
         			$activeStyle = "color: black;font-weight: bold;background: #e5e5e5;-webkit-box-shadow: inset 0px 0px 5px #c1c1c1;-moz-box-shadow: inset 0px 0px 5px #c1c1c1;box-shadow: inset 0px 0px 5px #c1c1c1;outline: none;"
         		?>
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Sales</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Sales</li>
								</ul>
								<div class="filter-container d-flex">
                                <a href="salesAdmin.php?category=property" style="<?php if ($_GET['category']=="property"){echo $activeStyle;}?>" ><div class="filter">Property</div></a>
                                <a href="salesAdmin.php?category=rent" style="<?php if ($_GET['category']=="rent"){echo $activeStyle;}?>" ><div class="filter">Rent</div></a>
                            </div>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Sales List</h4>
									<?php 
										if(isset($_GET['msg']))	
										echo $_GET['msg'];	
									?>
								</div>
								<div class="card-body">

									<table id="basic-datatable" class="table table-bordered table-hover">
										<?php if ($_GET['category']=="property"){?>
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Property</th>
                                                    <th>Type</th>
                                                    <th>Buyers Name</th>
                                                    <th>Dealers Name</th>
													<th>Price</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                            <?php
                                            $cnt = 1;
                                            $sql = "SELECT * FROM sales"; // Replace 'your_table' with your actual table name

                                            $result = $con->query($sql);

                                            if ($result->num_rows > 0) {
                                                // Output data of each row
                                                while ($row = $result->fetch_assoc()) {
                                                    $id = $row['pid'];
                                                    $uid = $row['uid'];
                                                    // Add more columns as needed
                                                    $query2="SELECT * FROM `property` WHERE pid=$id"; // property table bata match bhako property haruu list out gareko
                                                    $result2 = $con->query($query2);

                                                    $rowProperty = $result2->fetch_assoc();
                                                    ?>
                                                    <tr>
                                                    <td><?php echo $cnt; ?></td>
                                                    <td class="text-capitalize"><a href = "../propertydetail.php?pid=<?php echo $id; ?>"><?php echo $rowProperty['title']; ?></a></td>
                                                    <td class="text-capitalize"><?php echo $rowProperty['stype']; ?></td>
                                                    <?php
                                                    $userQuery = "SELECT * FROM `user` WHERE uid=$uid";
                                                    $result3 = $con->query($userQuery);

                                                    $rowUser = $result3->fetch_assoc();
                                                    $name = $rowUser['uname'];
                                                    ?>
                                                    <td class=""><?php echo $name; ?></td>
                                                    <?php
                                                    $oid = $rowProperty['uid'];
                                                    $ownerQuery = "SELECT * FROM `user` WHERE uid=$oid";
                                                    $result4 = $con->query($ownerQuery);
                                                    $rowUser = $result4->fetch_assoc();
                                                    $oname = $rowUser['uname'];
                                                    ?>
                                                    <td><?php echo $oname; ?></td>
													<td><?php echo $rowProperty['price']; ?></td>
                                                </tr>
                                                <?php
												$cnt=$cnt+1;
												} 
                                            }
                                            else {
                                                echo "0 results";
                                            }
                                            ?>
                                               
                                            </tbody>
										<?php
										}
										else{?>
											<thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Property</th>
                                                    <th>Type</th>
                                                    <th>Buyers Name</th>
                                                    <th>Dealers Name</th>
													<th>FLoor Number</th>
													<th>Price/Month</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                            <?php
                                            $cnt = 1;
                                            $sql = "SELECT * FROM rentfloor"; // Replace 'your_table' with your actual table name

                                            $result = $con->query($sql);

                                            if ($result->num_rows > 0) {
                                                // Output data of each row
                                                while ($row = $result->fetch_assoc()) {
                                                    $id = $row['pid'];
                                                    $uid = $row['uid'];
                                                    // Add more columns as needed
                                                    $query2="SELECT * FROM `property` WHERE pid=$id"; // property table bata match bhako property haruu list out gareko
                                                    $result2 = $con->query($query2);

                                                    $rowProperty = $result2->fetch_assoc();
                                                    ?>
                                                    <tr>
                                                    <td><?php echo $cnt; ?></td>
                                                    <td class="text-capitalize"><a href = "../propertydetail.php?pid=<?php echo $id; ?>"><?php echo $rowProperty['title']; ?></a></td>
                                                    <td class="text-capitalize"><?php echo $rowProperty['stype']; ?></td>
                                                    <?php
                                                    $userQuery = "SELECT * FROM `user` WHERE uid=$uid";
                                                    $result3 = $con->query($userQuery);

                                                    $rowUser = $result3->fetch_assoc();
                                                    $name = $rowUser['uname'];
                                                    ?>
                                                    <td class=""><?php echo $name; ?></td>
                                                    <?php
                                                    $oid = $rowProperty['uid'];
                                                    $ownerQuery = "SELECT * FROM `user` WHERE uid=$oid";
                                                    $result4 = $con->query($ownerQuery);
                                                    $rowUser = $result4->fetch_assoc();
                                                    $oname = $rowUser['uname'];
                                                    ?>
                                                    <td><?php echo $oname; ?></td>
													<td><?php echo $row['floor']; ?></td>
													<td><?php echo $rowProperty['price']; ?></td>
                                                </tr>
                                                <?php
												$cnt=$cnt+1;
												} 
                                            }
                                            else {
                                                echo "0 results";
                                            }
										}
										?>
                                        </table>
								</div>
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Main Wrapper -->

		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
		
		<script src="assets/plugins/datatables/dataTables.select.min.js"></script>
		
		<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
		<script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
		<script src="assets/plugins/datatables/buttons.flash.min.js"></script>
		<script src="assets/plugins/datatables/buttons.print.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>
</html>
