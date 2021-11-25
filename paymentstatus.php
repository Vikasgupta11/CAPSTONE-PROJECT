<!-- start including header -->
<?php
 include('./mainInclude/header.php');
 header("Pragma: no-cache");
 header("Cache-Control: no-cache");
 header("Expires: 0");

 include_once("dbconnection.php");


 require_once("PaytmKit/lib/config_paytm.php");
 require_once("PaytmKit/lib/encdec_paytm.php");
 $ORDER_ID = "";
 $requestParamList = array();
 $responseParamList = array();

 if (isset($_POST["ORDER_ID"]) && $_POST["submitBTN"] != "") {

     // In Test Page, we are taking parameters from POST request. In actual implementation these can be collected from session or DB. 
     $ORDER_ID = $_POST["ORDER_ID"];

     // Create an array having all required parameters for status query.
     $requestParamList = array("MID" => PAYTM_MERCHANT_MID , "ORDERID" => $ORDER_ID);  
     
     $StatusCheckSum = getChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY);
     
     $requestParamList['CHECKSUMHASH'] = $StatusCheckSum;

     // Call the PG's getTxnStatusNew() function for verifying the transaction status.
     $responseParamList = getTxnStatusNew($requestParamList);
 }
?>
<!-- end including header -->




<!-- Start Course Page Banner -->
<div class="container-fluid bg-dark">
<div class="row">
<img src="./images/coursebanner.jpg" alt="courses"  style="height:500px; width:100%; object-fit:cover; box-shadow:10px;"/> 
</div>
</div>


<br>
</br>
<div class="conatiner col-sm-4" style="margin-left:530px;"> 
	<h2 class="text-center my-4" style=" margin-right: 75px;">Payment Status</h2>
	<form method="post" action="">
    <div class="from-group row">
    <label class="offset-sm col-form-label" name="ORDER_ID"  style="font-weight: bold;">ORDER ID</label>
	<div>
    <input class="form-control mx" id="ORDER_ID" tabindex="1" maxlength="20" size="20"  style="width:440px;"  name="ORDER_ID" autocomplete="off" value="<?php echo $ORDER_ID ?>">

    </div>

    </div>
			<div >	
            <br>
			<input  class="btn btn-primary mx-4"	  name="submitBTN" type="submit"	onclick="">
			</div>
	

        </form>
	</div>
	
		<?php
		if (isset($responseParamList) && count($responseParamList)>0 )
		{ 
		?>

		</br>
		</br>

<form >
<div class="row justify-content-center">
<div class="col-auto">
<h2 class="text-center"> Payment Receipt </h2>

<table class="table table-bordered">
			<tbody>
				<?php
					foreach($responseParamList as $paramName => $paramValue) {
				   if(($paramName=="TXNID") || ($paramName=="ORDERID" || $paramName=="TXNAMOUNT") || ($paramName=="STATUS") ){
				  
				?>
				<tr >
					<td ><label><?php echo $paramName?></label></td>
					<td ><?php echo $paramValue?></td>
				</tr>
				<?php
					}}
				?>



<tr>
	<td> </td>
<td> 
<form class="d-print-none">	
<button type="button" style=" padding:10px 25px" class="btn btn-danger" onclick="javascript:window.print();">Print   </td>
				</form>
</tr>

			</tbody>

				</table>


</div>
</div>





		
		<?php
		}
		?>
	</form>

<br>
<br>
<br>



</body>
</html>

<!-- start contacts us-->
<?php
 include('./contacts.php');
?>
<!-- end contacts us -->



<!-- start including footer -->
<?php
 include('./mainInclude/footer.php');
?>
<!-- end including footer -->
