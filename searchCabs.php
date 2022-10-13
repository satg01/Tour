<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>


<!DOCTYPE HTML>
<html>
<head>
<title>cabs Search</title>
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
<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script type="text/javascript">
			setTimeout(function(){location.href="showDriverDetails.php"} , 2500);   
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
  <div class="col-sm-12 text-center">
	
	<div class="redirect">
		
		<img src="images/loader.gif"/>
			
		<div class="text">
			
			Give us a moment. We're searching for a driver partner.
			
		</div>
		
		</div>
		
	</div> 
    
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