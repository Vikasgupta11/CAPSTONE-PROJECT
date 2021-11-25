
<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="lms_db1"; // lms_db E-learning amangement system
// create connection 
$conn =new mysqli($db_host,$db_user,$db_password,$db_name);

//check Connection
if($conn->connect_error){
    die("Connection failed");

}
// else{
//     echo"Connected";
// }

?>  