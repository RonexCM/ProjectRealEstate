<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags --><!-- FOR MORE PROJECTS visit: codeastro.com -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Real Estate PHP">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
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
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


<!--	Title
	=========================================================-->
<title>Real Estate PHP</title>
</head>
<script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
<style>
    .price-tag{
        width: auto;
        position: absolute;
        right: 1.1rem;
        top: 75%;
    }
    .radio {
        color: white;
        text-align: center;
        margin-left: 0;
        margin-right: 0;
        padding: 5px 10px;
    }
    .radio-success{
        background: #60cf67;
    }
    .radio-danger{
        background:#ff5f5b;
    }
    .radio-label{
        display:block;
    }
    .custom-radio{
        transform: scale(1.5);
        accent-color: green;
    }
    .available{
        height: 15px;
        display: block;
        background: #60cf67;
        border-radius: 50%;
        width: 15px;
    }
    .not-available{
        height: 15px;
        display: block;
        background: #ff5f5b;
        border-radius: 50%;
        width: 15px;
    }
    .box {
      width: 45%; /* Adjust the width as needed */
      display: inline-block;
      margin: 10px;
      padding: 10px;
      box-sizing: border-box;
    }
</style>
<body>

<!--	Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>
--> 


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
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Property Detail</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Property Detail</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->

		
        <div class="full-row">
            <div class="container">
                <div class="row">
				
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
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['18'];?>" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 2-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['19'];?>" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 3-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['20'];?>" class="ls-bg" alt="" /> </div>
									
									<!-- Slide 4-->
									<div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['21'];?>" class="ls-bg" alt="" /> </div>
									
									<!-- Slide 5-->
									<div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['22'];?>" class="ls-bg" alt="" /> </div>
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
                                <div class="text-success text-left h5 my-2 text-md-right">RS &nbsp;<?php echo $row['13'];?></div>
                                <div class="text-left text-md-right">Price</div>
                            </div>
                        </div>
                        <div class="property-details">
                            <div class="bg-gray property-quantity px-4 pt-4 w-100">
                                <ul>
                                    <li><span class="text-secondary"><?php echo $row['12'];?></span> Sqft</li>
                                    <li><span class="text-secondary"><?php echo $row['6'];?></span> Bedroom</li>
                                    <li><span class="text-secondary"><?php echo $row['7'];?></span> Bathroom</li>
                                    <li><span class="text-secondary"><?php echo $row['8'];?></span> Balcony</li>
                                    <li><span class="text-secondary"><?php echo $row['10'];?></span> Hall</li>
                                    <li><span class="text-secondary"><?php echo $row['9'];?></span> Kitchen</li>
                                </ul>
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
                                    <img src="admin/property/<?php echo $row['25'];?>" alt="Not Available"> </div>
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Basement Floor</button>
                                <div id="collapseTwo" class="collapse p-4" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <img src="admin/property/<?php echo $row['26'];?>" alt="Not Available"> </div>
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Ground Floor</button>
                                <div id="collapseThree" class="collapse p-4" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <img src="admin/property/<?php echo $row['27'];?>" alt="Not Available"> </div>
                            </div>

                            <!-- Available Flooor**************************** -->
                            <!-- Button trigger modal -->
                            

                            <!-- Modal -->
                            

                            <?php if ($row['5']=="rent"){?>
                                <div class="containBox">
                                    <div class="box">
                                        <h5 class="mt-5 mb-4 text-secondary  position-relative">Select the Floor you want to Rent.</h5>
                                    </div>
                                    <div class="box">
                                        <div class="d-flex align-items-center">
                                            <span class="available"></span> &nbsp;Available
                                            <span class="not-available" style="margin-left:25px;"></span> &nbsp;Not Available
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                <?php 
                                    $rentorsale = $row['5'];
                                    $data = $row['28']; 
                                    $parts = explode(" Floor", $data);
                                    $floorNumber = $parts[0];//11
                                    ?>
                                    <form action="propertyrent.php" method = "post">
                                    <div class="container">
  
                                    <input type="hidden" name="propertyId" value = "<?php echo $row['pid']; $property = $row['pid'];?>">
                                    <div class="d-flex ">
                                    <?php
                                        for ($i = 0; $i < $floorNumber; $i++) {
                                        ?>
                                            <div class="radio radio-success" style="border: 1px solid #e5c1c1;border-radius: 5px;">
                                                <input id="rent" class="custom-radio" name="rentFloor" type="radio" value="<?php echo $i + 1;?>">
                                                <label for="rent" class="radio-label"> Floor <?php echo $i + 1?></label>
                                            </div>
                                        <?php
                                        }?>
                                    </div>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title fs-5" id="exampleModalLabel">Confirmation</h2>
                                        </div>
                                    <div class="modal-body">
                                        <p style="font-size:17px;">Are you sure you want to rent <span id="selectedFloor"></span>?</p>
                                        <div class="agent-contact pt-60">
                                            <p style="font-size:16px; font-weight:bold;">Owner's Details: </p>
                                            <div class="row mx-1">
                                                <div class="col-sm-8 col-lg-9">
                                                    <div class="agent-data text-ordinary mt-sm-20">
                                                        <h6 class="text-success text-capitalize"><?php echo $row['uname'];?></h6>
                                                        <ul class="mb-3">
                                                            <li><?php echo $row['uphone'];?></li>
                                                            <li><?php echo $row['uemail'];?></li>
                                                        </ul>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                                <!-- FOR MORE PROJECTS visit: codeastro.com -->
                                            </div>
                                            <div class="price-tag btn btn-success d-none d-xl-block">Rs. <?php echo $row['price'];?> / month</div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" id="payment-button" class="border btn d-none d-xl-block btn-success" data-bs-dismiss="modal">Confirm</button>
                                    </div>
                                </div>
                            </div>
                                    </div>
                                    <button type="button" class="btn btn-success d-none d-xl-block my-4" id="btnRentFloor" data-bs-toggle="modal" data-bs-target="#exampleModal" disabled>Rent Floor</button>
                                    <input type="submit" id="khalti-success" style="border:none;background:#ffffff;color:red;visibility:hidden;" name="method" value="Khalti Paid">    
                                    </form>
                                    </div>
                                    <!-- FOR MORE PROJECTS visit: codeastro.com -->

                            </div><?php
                            }
                            else{?>
                            <div class="containbtn d-flex justify-content-center m-4">
                                <button id="payment-button" class="border btn d-none d-xl-block btn-success">Book Property</button>
                            </div>
                            <form method = "post" action = "sales.php">
                                <input name="pid" type="hidden" value = "<?php echo $row['pid'];?>">
                                <input name="price" type="hidden" value = "<?php echo $row['price'];?>">
                                <input name="type" type="hidden" value = "<?php echo $row['stype'];?>">
                                <input type="submit" id="khalti-success" style="border:none;background:#ffffff;color:red;visibility:hidden;" name="method" value="Khalti Paid">
                            </form>
                            <?php
                            }
                            ?>
                            
                            <!-- ************************************** -->
                            <h5 class="mt-5 mb-4 text-secondary double-down-line-left position-relative">Contact Owner</h5>
                            <div class="agent-contact pt-60">
                                <div class="row">
                                    <div class="col-sm-4 col-lg-3"> <img src="admin/user/<?php echo $row['uimage']; ?>" alt="" height="200" width="170"> </div>
                                    <div class="col-sm-8 col-lg-9">
                                        <div class="agent-data text-ordinary mt-sm-20">
                                            <h6 class="text-success text-capitalize"><?php echo $row['uname'];?></h6>
                                            <ul class="mb-3">
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
                        <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4 mt-5">Featured Property</h4>
                        <ul class="property_list_widget">
							
                            <?php 
                            $query=mysqli_query($con,"SELECT * FROM `property` WHERE isFeatured = 1 ORDER BY date DESC LIMIT 3");
                                    while($row=mysqli_fetch_array($query))
                                    {
                            ?>
                            <li> <img src="admin/property/<?php echo $row['18'];?>" alt="pimage">
                                <h6 class="text-secondary hover-text-success text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h6>
                                <span class="font-14"><i class="fas fa-map-marker-alt icon-success icon-small"></i> <?php echo $row['14'];?></span>
                                
                            </li>
                            <?php } ?>

                        </ul>
                                        
                        <div class="sidebar-widget mt-5">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Recently Added Property</h4>
                            <ul class="property_list_widget">
							
								<?php 
								$query=mysqli_query($con,"SELECT * FROM `property` ORDER BY date DESC LIMIT 7");
										while($row=mysqli_fetch_array($query))
										{
								?>
                                <li> <img src="admin/property/<?php echo $row['18'];?>" alt="pimage">
                                    <h6 class="text-secondary hover-text-success text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h6>
                                    <span class="font-14"><i class="fas fa-map-marker-alt icon-success icon-small"></i> <?php echo $row['14'];?></span>
                                    
                                </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <?php
        if ($rentorsale=="rent"){
            $query=mysqli_query($con,"SELECT * FROM `rentfloor` WHERE pid = $property");
            $rent = '0';
            while($row=mysqli_fetch_array($query))
            {
                $rent = $rent . ',' . $row['floor'];
            }
        }
        ?> -->
         <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script>
        const rentedFloors=[<?php echo $rent;?>]//Creating array of booked floor
        const btnRentFloor = document.getElementById('btnRentFloor');

        const totalFloors = [<?php
            for($i=0;$i<$floorNumber;$i++){
                echo $i . ',';
            }
            ?>]//Creating array of total floors available
        if(((rentedFloors.length)-1) == totalFloors.length){ //This disables the btn if all the floors are booked
            document.getElementById("btnRentFloor").disabled = true;
        }
        
        const options = document.querySelectorAll("#rent");
        btnRentFloor.addEventListener('click',()=>{
            var selectedRadio= document.querySelector('input[name="rentFloor"]:checked');
            document.getElementById('selectedFloor').textContent = 'Floor ' + selectedRadio.value;
        })
        options.forEach((option) => {
            option.addEventListener('change',()=>{ // In the beginnig the buttons are disabled, This will enable the button if any radio btn are selected
                btnRentFloor.disabled = false;
            })
        if (rentedFloors.includes(parseInt(option.value))) { // This is will disable the radio btn if the radio option is present in the rentedFloor Array.
            option.disabled = true;//Example: Here's one Array RentedFloors=[3,4,5]
            //This forEach method iterates in every element and then if the value are present in the above array then it will result in disable of the button
            // in value 1. since 1 is not present in the Array Above i.e RentedFloors so it will not disable the button.
            //In case of 4. Since 4 is present in the Array Above i.e RentedFloors so the condition of 'if' statement matches and it will disable the radio button.
            var parentContainer = option.parentNode;// Getting the parent node of the option element
            parentContainer.classList.remove('radio-success');// removing the radio-success because success indicates available and in this condition floor is not available.
            parentContainer.classList.add('radio-danger');
        }
        });
</script>
<script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_ffb39d9c20614e5c89d6157f4bb0219a",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
                ],
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    var button = document.getElementById('khalti-success');
    				button.form.submit();
                    console.log(payload)
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount: 1000});
        }
    </script>

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