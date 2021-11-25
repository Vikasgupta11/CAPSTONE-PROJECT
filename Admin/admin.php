<?php
// echo("admin.php");
// echo(!isset($_SESSION));
if(!isset($_SESSION)){
    session_start(); 
}


include_once('../dbconnection.php');

// Admin Login Verfication ////

if(!isset($_SESSION['is_admin_login'])){



if(isset($_POST["adminLogEmail"]) && isset($_POST["adminLogEmail"]) && isset($_POST["checklogEmail"]))
{ 
   
$adminLogEmail=$_POST["adminLogEmail"];
$adminLogPass=$_POST["adminLogPass"];


// firing query
$sql="SELECT admin_email, admin_pass FROM admin WHERE admin_email='".$adminLogEmail."' AND admin_pass='".$adminLogPass."'";

$result=$conn->query($sql);
$row=$result->num_rows;

if($row===1){

$_SESSION['is_admin_login']=true;
$_SESSION['adminLogEmail']=$adminLogEmail;
 json_encode($row);

}else if($row===0){
     json_encode($row);
}

}

}

?>
<script>



document.title="admin";

</script>