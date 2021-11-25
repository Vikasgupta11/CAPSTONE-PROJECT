<?php

if(!isset($_SESSION)){
    session_start();
}

// Includeing only one time for db connection file to create connection
// or creating connection with databasee
include_once('../dbconnection.php');


//--------------------------------------------/////
///Checking email for Already Registered student  
if(isset($_POST['checkemail']) && isset($_POST['stuemail']))
{

    // this below has some error so we have implemented short cut in line  16
//    $stuemail1=$_POST['stuEmail'];
   $stuemail1=$_POST['stuemail'];
//    echo($stuemail1);
   $sql="SELECT stu_email FROM student WHERE stu_email='".$stuemail1."'";
   $result=$conn->query($sql);
   $row=$result->num_rows;
   
   echo json_encode($row)  ;


}












// Insert Student data resgistration
if(isset($_POST['stuName']) && isset($_POST['stuEmail']) && isset($_POST['stuPassword'])&&
 isset($_POST['signup'])){
 $stuname=$_POST['stuName'];
 $stuemail=$_POST['stuEmail'];
 $stupassword=$_POST['stuPassword'];


// creating query to insert data in db
    $sql="INSERT INTO student(stu_name,stu_email,stu_pass) VALUES('$stuname','$stuemail','$stupassword')";

     
   if( $conn->query($sql)===TRUE){
       echo json_encode("OK");
   }
   else{
       echo json_encode("FAILED");
   }
}



////----------- Student login Verfication-------------////
// below data send by checkStuLogin() function in ajaxrequest

if(!isset($_SESSION['is_login'])){



if(isset($_POST["stuLogEmail"]) && isset($_POST["stuLogPass"]) && isset($_POST["checklogEmail"]))
{ 
    
$stuLogEmail=$_POST["stuLogEmail"];
$stuLogPass=$_POST["stuLogPass"];


// firing query
$sql="SELECT stu_email, stu_pass FROM student WHERE stu_email='".$stuLogEmail."' AND stu_pass='".$stuLogPass."'";

$result=$conn->query($sql);
$row=$result->num_rows;

if($row===1){

$_SESSION['is_login']=TRUE;
$_SESSION['stuLogEmail']=$stuLogEmail;
echo json_encode($row);

}else if($row===0){
    echo json_encode($row);
}

}

}

?>