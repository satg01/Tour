<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>


<!DOCTYPE HTML>
<html>
    <!-- HEAD TAG STARTS -->
<head>
<title>Driver Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/main.css" rel="stylesheet">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/hotelDetails.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css" />
	
	
</head>
	
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
    <!-- top-header -->
    <?php include('includes/header.php');?>
           <div class="slider-3">
	        <div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Driver Details</h1>
	</div>
</div>
  <!--- /slider ---->
  <?php include("common/headerLoggedIn.php"); ?>
		
		<div class="spacer">a</div>
		<div class="spacer">a</div>
		
		<?php
		
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "projectmeteor";
			
			// Creating a connection to projectmeteor MySQL database
			$conn = new mysqli($servername, $username, $password, $dbname);
			
			// Checking if we've successfully connected to the database
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
		
			$type = $_SESSION["carTypeCabs"];
		
			$sql = "SELECT * FROM `cabdrivers` WHERE `carType`='$type' ORDER BY RAND() LIMIT 1";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			
			$_SESSION["carID"]=$row["carID"];
			
		?>
		
		<div class="col-sm-2"></div> <!-- empty div -->
		
		<div class="col-sm-8 showDriverDetails">
		
			<div class="col-sm-12 listItem">
			
				<div class="col-sm-4 leftBox">
				
					<div class="col-sm-12 imageContainer">
						
						<img src="images/cabs/drivers/driverPlaceholder.jpg" alt="Image not found" />
						
					</div>
				
				</div>
				
				<div class="col-sm-8 rightBox borderLeft">
				
					<div class="hotelName col-sm-12 text-center noMargin">
						
						<?php echo $row["driverName"]; ?>
						
					</div>
					
					<div class="location col-sm-12 text-center">
						
						<?php echo $row["carModel"]; ?>
						
					</div>
				
					<div class="col-sm-2 text-center">
					
						<div class="col-sm-12 rating noMargin">
							
							<?php echo $row["driverRating"]; ?>
							
						</div>
						
						<div class="col-sm-12 ratingText noMargin">
							
							Rating
								
						</div>
					
					</div>
					
					<div class="col-sm-5 text-center">
					
						<div class="col-sm-12 car noMargin">
							
							<?php echo $row["carNo"]; ?>
							
						</div>
						
						<div class="col-sm-12 carText noMargin">
							
							Car No.
								
						</div>
					
					</div>
					
					<div class="col-sm-5 text-center">
					
						<div class="col-sm-12 contact noMargin">
							
							<?php echo $row["driverPhone"]; ?>
							
						</div>
						
						<div class="col-sm-12 contactText noMargin">
							
							Contact No.
								
						</div>
					
					</div>
					
					<!-- creating a form -->
					
					<form action="payment.php" method="POST">
					
						<div class="col-sm-12 text-center">
							
							<input type="submit" class="genReceipt" value="Proceed to Payment" /> 
				
						</div>
						
						<input type="hidden" name="modeHidden" value="cabs" />
					
					</form>
				
				</div> <!-- right box -->
		
			</div>
			
		</div>
		
		<div class="col-sm-1"></div> <!-- empty div -->
		
		<div class="col-sm-12 spacer">.</div> <!-- just a dummy class for creating some space -->
		<div class="col-sm-12 spacer">.</div> <!-- just a dummy class for creating some space -->
		<div class="col-sm-12 spacer">.</div> <!-- just a dummy class for creating some space -->
        
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