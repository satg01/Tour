<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>


<!DOCTYPE HTML>
<html>
<head>
<title>TMS  | hotels List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/main.css" rel="stylesheet">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript">
		
			$(function () {
       				$('#datetimepicker5').datetimepicker({
		   			format: 'L',
		   			locale: 'en-gb',
					useCurrent: false,
					minDate: moment()
	   				});
				
        			$('#datetimepicker6').datetimepicker({
            		useCurrent: false,
					format: 'L',
					locale: 'en-gb'
					});
				
					$("#datetimepicker5").on("dp.change", function (e) {
            		$('#datetimepicker6').data("DateTimePicker").minDate(e.date);
        			});
				
        			$("#datetimepicker2").on("dp.change", function (e) {
            		$('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        			});
    		});
	<script>
		 new WOW().init();
		 
	</script>
    <!--//end-animate-->
</head>
	
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
    <!-- top-header -->
    <?php include('includes/header.php');?>
           <div class="slider-3">
	        <div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> TMS -Hotels Search</h1>
	</div>
</div>
  <!--- /slider ---->
		
  <body>
	
		<div class="container-fluid">
		
			<div class="cabs col-sm-12">
			
			<!-- HEADER SECTION STARTS -->
				
				<div class="col-sm-12">
					
					<div class="header">
					
						<?php include("common/headerTransparentLoggedIn.php"); ?>
					
						<div class="col-sm-12">
						
						<div class="menu text-center">
							
							<ul>
								<a href="hotels.php"><li>Hotels</li></a>
								<a href="flights.php"><li>Flights</li></a>
								<a href="trains.php"><li>Trains</li></a>
								<a href="bus.php"><li>Buses</li></a>
								<li class="selected">Cabs</li>
							</ul>
							
						</div>
						
					</div>
					
					</div> <!-- header -->
				
				</div> <!-- col-sm-12 -->
				
			<!-- HEADER SECTION ENDS -->
				
				
				
			<!-- CAB SEARCH SECTION STARTS -->
				
				<div class="col-sm-12">
					
					<div class="search">
   					
    					<div class="content">
    					
    					<form action="booking.php" method="POST">
    					
    						<div class="col-sm-6">			
   							<div class="form-group">
   								 <label for="originBus">Origin:<p> </p></label>
     
      								<select id= "originBus"  data-live-search="true" class="selectpicker form-control" data-size="5" title="Select Origin City" name="originCity" required>
       									<option value="New Delhi" data-tokens="DEL New Delhi">New Delhi</option>
        								<option value="Mumbai" data-tokens="BOM Mumbai">Mumbai</option>
        								<option value="Kolkata" data-tokens="CCU Kolkata">Kolkata</option>
        								<option value="Bangalore" data-tokens="BLR Bangalore">Bangalore</option>
        								<option value="Chennai" data-tokens="MAA Chennai">Chennai</option>
        								<option value="Pune" data-tokens="PNQ Pune">Pune</option>
        								<option value="Goa" data-tokens="GOI Goa">Goa</option>
        								<option value="Guwahati" data-tokens="GAU Guwahati">Guwahati</option>
        								<option value="Shillong" data-tokens="ISK Shillong">Shillong</option>
        								<option value="Jammu" data-tokens="IXJ Jammu">Jammu</option>
        								<option value="Bhopal" data-tokens="BHI Bhopal">Bhopal</option>
        								<option value="Agartala" data-tokens="IXA Agartala">Agartala</option>
      								</select>
							</div>
            			</div>
            			
            				<div class="col-sm-6">			
   							<div class="form-group">
   								 <label for="destinationBus">Destination:<p> </p></label>
     
      								<select id= "destinationBus"  data-live-search="true" class="selectpicker form-control" data-size="5" title="Select Destination City" name="destinationCity" required>
       									<option value="New Delhi" data-tokens="DEL New Delhi">New Delhi</option>
        								<option value="Mumbai" data-tokens="BOM Mumbai">Mumbai</option>
        								<option value="Kolkata" data-tokens="CCU Kolkata">Kolkata</option>
        								<option value="Bangalore" data-tokens="BLR Bangalore">Bangalore</option>
        								<option value="Chennai" data-tokens="MAA Chennai">Chennai</option>
        								<option value="Pune" data-tokens="PNQ Pune">Pune</option>
        								<option value="Goa" data-tokens="GOI Goa">Goa</option>
        								<option value="Guwahati" data-tokens="GAU Guwahati">Guwahati</option>
        								<option value="Shillong" data-tokens="ISK Shillong">Shillong</option>
        								<option value="Jammu" data-tokens="IXJ Jammu">Jammu</option>
        								<option value="Bhopal" data-tokens="BHI Bhopal">Bhopal</option>
        								<option value="Agartala" data-tokens="IXA Agartala">Agartala</option>
      								</select>
							</div>
            			</div>
            			
            				<div class="col-sm-3">
        						<div class="form-group">
     								<label for="datetime4">Select Pickup Date:<p> </p></label>
            						<div class="input-group date" id="datetimepicker4">
                						<input id="datetime4" type="text" class="inputDate form-control" placeholder="Select Date" name="date" required/>
                						<span class="input-group-addon">
                   						<span class="fa fa-calendar"></span>
                						</span>
            						</div>
        						</div>
    						</div>
    						
    						<div class="col-sm-3">
        						<div class="form-group">
     								<label for="datetime7">Select Pickup Time:<p> </p></label>
            						<div class="input-group date" id="datetimepicker7">
                						<input id="datetime7" type="text" class="inputDate form-control" placeholder="Select Time" name="time" required/>
                						<span class="input-group-addon">
                   						<span class="fa fa-calendar"></span>
                						</span>
            						</div>
        						</div>
    						</div>
    						
    						<div class="col-sm-6">
							<label for="carType">Type of car: <p> </p></label>
    							<div class="form-group">
    								<select id= "carType" class="selectpicker form-control" data-size="5" title="Select car type" name="carType" required>
    									<option data-subtext="Mahindra Scorpio  |  Maruti Suzuki Vitara Breeza  |  Toyota Innova  |  Toyota Fortuner" value="SUV">SUV</option>
    									<option data-subtext="Maruti Suzuki Ciaz  |  Honda City  |  Toyota Etios  |  Maruti Suzuki Swift Dzire" value="Sedan">Sedan</option>
										<option data-subtext="Maruti Suzuki Alto 800  |  Hyundai i10  |  Maruti Suzuki WagonR  |  Honda Brio" value="Hatchback">Hatchback</option>	
									</select>
								</div>
							</div>
           				
            				<div class="col-sm-12 text-center">
            			
            					<input type="submit" class="button" name="searchCabs" value="Search Cabs">
            				
            				</div>
            				
            				<input type="hidden" name="modeHidden" value="cabs" />

            			</form>
            			
    					</div> <!-- content -->
    					
					</div> <!-- search -->
					
				</div>
			
			<!-- CAB SEARCH SECTION ENDS -->
				
			</div> <!-- trains -->	
			
			
			
			<!-- POPULAR CABS SECTION STARTS -->
			
				<!-- <div class="col-sm-12"> -->
					
				<div class="popularCabs col-sm-12">
					
					<div class="heading">
					
							Cars Available
					
					</div>
					
					<div class="bg">
					
						<!-- replace listItems below by PHP loops -->
						
					<div class="col-sm-4">
						
								<div class="listItem">
								
									<div class="imageContainer text-center">
										
										<img src="images/cabs/carTypes/hatchback.jpg" alt="Hatchback Cars">
										
									</div>
									
									<div class="headings">
										
										Hatchback
										
									</div>
									
									<div class="info">
										
										₹ 5.5/km and ₹ 1.25/min 
										
									</div>
									
									<div class="models">
									
										<ul class="text-center">
											
											<li class="carModels">Alto 800</li>
											<li class="carModels">Alto K10</li>
											<li class="carModels">WagonR</li>
											<li class="carModels">Swift</li>
											<li class="carModels">Brio</li>
											<li class="carModels">i10</li>
											<li class="carModels">i20</li>
											
										</ul>
										
									</div>
									
								</div> <!-- listItem 1 -->
							
							</div> <!-- col-sm-4 -->
							
					<div class="col-sm-4">
						
								<div class="listItem">
								
									<div class="imageContainer text-center">
										
										<img src="images/cabs/carTypes/sedan.jpg" alt="Sedan Cars">
										
									</div>
									
									<div class="headings">
										
										Sedan
										
									</div>
									
									<div class="info">
										
										₹ 8.75/km and ₹ 2/min 
										
									</div>
									
									<div class="models">
									
										<ul class="text-center">
											
											<li class="carModels">Swift Dzire</li>
											<li class="carModels">Verna</li>
											<li class="carModels">Ciaz</li>
											<li class="carModels">City</li>
											<li class="carModels">Civic</li>
											<li class="carModels">Xcent</li>
											<li class="carModels">Zest</li>
											
										</ul>
										
									</div>
									
								</div> <!-- listItem 1 -->
							
							</div> <!-- col-sm-4 -->
							
					<div class="col-sm-4">
						
								<div class="listItem">
								
									<div class="imageContainer text-center">
										
										<img src="images/cabs/carTypes/suv.jpg" alt="SUV Cars">
										
									</div>
									
									<div class="headings">
										
											SUV
										
									</div>
									
									<div class="info">
										
										₹ 13.25/km and ₹ 3.75/min 
										
									</div>
									
									<div class="models">
									
										<ul class="text-center">
											
											<li class="carModels">Tucson</li>
											<li class="carModels">Scorpio</li>
											<li class="carModels">Creta</li>
											<li class="carModels">Fortuner</li>
											<li class="carModels">Vitara Breeza</li>
											<li class="carModels">Endeavor</li>
											<li class="carModels">Innova</li>
											
										</ul>
										
									</div>
									
								</div> <!-- listItem 1 -->
							
							</div> <!-- col-sm-4 -->						
						
					</div> <!-- bg -->
						
				</div> <!-- popularBus -->
					
				<!-- </div> -->
				
			<!-- POPULAR CABS SECTION ENDS -->
			
            <!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->

				
	</body>
	
	<!-- BODY TAG ENDS -->
	
</html>