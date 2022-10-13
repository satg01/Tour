<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit2']))
{
$pid=intval($_GET['pkgid']);
$useremail=$_SESSION['login'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$comment=$_POST['comment'];
$status=0;
$sql="INSERT INTO hotelbookings(PackageId,UserEmail,FromDate,ToDate,Comment,status) VALUES(:pid,:useremail,:fromdate,:todate,:comment,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':comment',$comment,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Booked Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>


<!DOCTYPE HTML>
<html>
    <!-- HEAD TAG STARTS -->
<head>
<title>TMS | Hotels Details</title>
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
	<script>
		 new WOW().init();
	</script>
	<style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: rgb(218, 152, 235);
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: rgb(218, 152, 235);
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>			
	  				
</head>

<!-- HEAD TAG ENDS -->
	
<!-- BODY TAG STARTS -->	
	<body>
        <!-- top-header -->
           <?php include('includes/header.php');?>
           <div class="slider-3">
	        <div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> TMS -hotels Details</h1>
	</div>
</div>
  <!--- /slider ---->
  <div class="selectroom">
	<div class="container">	
		  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
		
  
  <?php include("common/headerLoggedIn.php"); ?>
		
		<?php
		
			$hotelID=$_GET["hotelId"];
		
		?>
		
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
		
			$sql = "SELECT * FROM hotels WHERE hotelID='$hotelID'";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc()
			
		?>
		
		<div class="col-sm-1"></div> <!-- empty div -->
		
		<div class="col-sm-10 hotelDetails">
		
			<div class="col-sm-12 listItem">
			
				<div class="col-sm-8 leftBox">
				
					<div class="col-sm-12 imageContainer">
						
						<img src="<?php echo $row["mainImage"]; ?>" alt="Image not found" />
						
					</div>
				
				</div>
				
				<div class="col-sm-4 rightBox borderLeft">
				
					<div class="hotelName col-sm-12 text-center noMargin">
						
						<?php echo $row["hotelName"]; ?>
						
					</div>
					
					<div class="location col-sm-12 text-center">
						
						<span class="fa fa-map-marker"></span> <?php echo $row["locality"].', '.$row["city"]; ?>
						
					</div>
				
					<div class="col-sm-5 text-center">
					
						<div class="col-sm-12 rating noMargin">
							
							<?php echo $row["rating"]; ?>
							
						</div>
						
						<div class="col-sm-12 ratingText noMargin">
							
							<?php
					
							$rating=$row["rating"];
					
							if($rating>=4): ?>
								
								Excellent
									
							<?php
						
							elseif($rating>=3 and $rating<4): ?>
							
								Average
								
							<?php
						
							elseif($rating<3): ?>
							
								Bad
								
							<?php endif; ?>
								
						</div>
					
					</div>
					
					<div class="col-sm-7 text-center">
						
						<div class="col-sm-12 starContainer">
					
						<?php
					
							$noOfStars=$row["stars"];
					
							for($i=0; $i<$noOfStars; $i++) {?>
								
								<i class="fa fa-star"></i>
						
						<?php } ?>
					
						</div>
						
					</div>
					
					<div class="col-sm-12 amenities text-center">
						
						<ul>
							
							<?php if($row["wifi"]=="Yes") {?>
								<li class="fa fa-wifi icons" id="wifi"></li>
							<?php } ?>
								
							<?php if($row["swimmingPool"]=="Yes") {?>
								<li class="fa fa-life-buoy icons" id="pool"></li>
							<?php } ?>
							
							<?php if($row["parking"]=="Yes") {?>
								<li class="fa fa-car icons" id="parking"></li>
							<?php } ?>
							
							<?php if($row["restaurant"]=="Yes") {?>
								<li class="fa fa-cutlery icons" id="restaurant"></li>
							<?php } ?>
							
							<?php if($row["laundry"]=="Yes") {?>
								<li class="fa fa-shirtsinbulk icons" id="laundry"></li>
							<?php } ?>
							
							<?php if($row["cafe"]=="Yes") {?>
								<li class="fa fa-coffee icons" id="cafe"></li>
							<?php } ?>
							
						</ul>
						
					</div> <!-- amenities -->
					
					<div class="col-sm-12 checkInOut text-center">
						
						<div class="col-sm-6 checkIn">
							
							<div class="col-sm-12 time">
								
								<?php echo $row["checkIn"]; ?>
								
							</div>
							
							<div class="col-sm-12 timeTag">
								
								Check In
								
							</div>
							
						</div>
						
						<div class="col-sm-6 checkOut">
							
							<div class="col-sm-12 time">
								
								<?php echo $row["checkOut"]; ?>
								
							</div>
							
							<div class="col-sm-12 timeTag">
								
								Check Out
								
							</div>
							
						</div>
						
					</div> <!-- checkInOut -->
					
					<div class="col-sm-12 priceContainer text-center">
						
						₹ <?php echo $row["price"]; ?>
						
					</div>
						
					<div class="col-sm-12 priceNote text-center">
						
						per room per night
						
					</div>
					
					<!-- creating a form -->
					
					<form action="booking.php" method="POST">
						
					
						<div class="col-sm-12 text-center">
							
							<input type="submit" name="submit2" class="btn-primary btn" value="Book Now" /> 
				
						</div>
						
						<input type="hidden" name="modeHidden" value="hotel" />
						<input type="hidden" name="hotelIDHidden" value="<?php echo $hotelID; ?>" />
					
					</form>
				
				</div> <!-- right box -->
				
				<div class="col-sm-12 hotelDesc">
					
					<?php echo $row["hotelDesc"]; ?>
					
				</div>
		
			</div>
			
		</div>

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