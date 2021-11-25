<?php
include_once('dbconnection.php');
  session_start();

    if(!isset($_SESSION['stuLogEmail'])){
echo('<script> location.href="loginorsignup.php"</script>');

    }else{


        header("Pragma: no-cache");
        header("Cache-Control: no-cache");
        header("Expires: 0");
    $stuEmail=$_SESSION['stuLogEmail'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="GENERATOR" content="Evrsoft First Page">



	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<!--link  Google fonts for brand name -->
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
	<!-- Bootstrap File  -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Custom CSS File Stle.css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/testimonial.css">
	<!-- link for bottom testimonial  css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">



	<title>CheckOut</title>
</head>

<body>
	<div class="container mt-5" style="background-color: #ADD8E6; width:1500px; height:450px; border-radius:15px; margin-top: 20px;   ">
		<div class="row">
			<div class="col-sm-6 offset-sm-3">
				<h3 class="mb-5">Welcome to <b>TechLearn</b> Payment Page</h3>



				<form method="POST" action="./PaytmKit/pgRedirect.php">
				
					<!-- <div class="form-group row">
						<label for="ORDER_ID" class="col-sm-4 col-form-label">
							ORDER ID
						</label>
						<div class="col-sm-8">
							<input id="ORDER_ID" name="ORDER_ID"
							class="form-control" tabindex="1" maxlength="20" size="20"
							 autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999)?>"
							readonly >
						</div>
					</div> -->

                         <div class="form-group row">

					<label class="col-sm-4 col-form-label">ORDER ID</label>
					<div class="col-sm-8">
					<input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off" class="form-control"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly>
</div>
</div>
					<br>


<div class="form-group row">
<label for="CUST_ID" class="col-sm-4 col-form-label">Student Email</label>
<div class="col-sm-8">
	<input id="CUST_ID"  class="form-control" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" 	value="<?php if(isset($stuEmail)){ echo( $stuEmail);}  ?>"  readonly>
</div>
</div>
<br>

<!-- <div class="form-group row">
	<label for="TXN_AMOUNT" class="col-sm-4 col-form-label">Amount</label>
	<div class="col-sm-8">
		<input title="TXN_AMOUNT"  class="form-control" tabindex="10"  
	  type="text" name="TXN_AMOUNT" value="<?php if(isset($_POST['id']) ){echo($_POST['id']);}  ?>"
	readonly
		>
	</div>
	</div> -->

<div class="form-group row"> 
	<label for="TXN_AMOUNT" class="col-sm-4 col-form-label">Amount</label>
		<div class="col-sm-8">	<input class="form-control" title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"

						value="<?php if(isset($_POST['id']) ){echo(trim($_POST['id']));}  ?>" readonly>
						</div>
					

</div>




<div class="form-group row">
<!--  Label for Industry_TYPE ID  -->

<div class="col-sm-8">
	<input id="INDUSTRY_TYPE_ID" type="hidden" class="form-control" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID"
	autocomplete="off" value="Retail" readonly>
</div>
</div>


<div class="form-group row">
	
	<div class="col-sm-8">
	<input  type="hidden" id="CHANNEL_ID" class="form-control" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID"
	autocomplete="off" value="WEB" readonly>
</div>
</div>
<br>

<div class="text-center">
<input value="CheckOut" class="btn btn-primary" id="btnsub" type="submit" onclick=""   >
&nbsp; &nbsp;
<a href="courses.php" class="btn btn-secondary"> Cancel</a>
</div>








				</form>
<?php


	// $kemail="email";
	$vemail=$_SESSION['stuLogEmail'];

	// $kcourse_id="course_id";
    $vcourse_id=$_SESSION['course_id'];
	setcookie("email",$vemail,time()+(60000*5),"/");
	setcookie("course_id",$vcourse_id,time()+(60000*1),"/");
 


?>


<small class="form-text text-muted">
Note: Complete Payment by Clicking Checkout Button 
</small>

			</div>
		</div>

	</div>






	
</body>

</html>

<?php
    }
?>