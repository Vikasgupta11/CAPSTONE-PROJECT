<?php
if(!isset($_SESSION)){
    session_start();
  }
  

include('./AdminInclude/header.php');
include('../dbconnection.php');
     

  
  if($_SESSION['is_admin_login']){
  $adminEmail=$_SESSION['adminLogEmail'];
  
  }else{
    echo('<script> location.href="../index.php"; </script>');
  
  }
?>

<div class="col-sm-10 mt-5">
<p class="bg-dark text-white p-2">List of Feedback</p>
<?php
$sql ="SELECT * FROM feedback";
$result=$conn->query($sql);
if($result->num_rows>0){


echo '<table class="table" >
<thead>
<tr>
  <th scope="col">Feedback</th>
  <th scope="col">Content</th>
  <th scope="col">Student ID</th>
  <th scope="col">Action</th>

</tr>

</thead>
<tbody>';
while($row=$result->fetch_assoc()){
  echo'<tr>';
  echo'<td scope="row">'.$row["f_id"].'</td>';

  echo'<td scope="row">'.$row["f_content"].'</td>';
  echo'<td scope="row">'.$row["stu_id"].'</td>';

  echo'<td> <form action="" method="POST"
  class="d-inline" ><input type="hidden" name="id" value='.$row["f_id"].'>
  <button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="fa fa-trash-alt"></i></button> </form> </td> </tr>
';

}
echo '</tbody> 
</table>';
    
}else{
  echo'<div class="alert alert-info"> 0 Results</div>';
}


if(isset($_REQUEST['delete'])){
  $sql="DELETE FROM feedback WHERE f_id ={$_REQUEST['id']}";

if($conn->query($sql)==TRUE){



// Record DELETED SUCCESsFULLY
$msg="Data Deleted Succesfully !";
echo "<meta http-equiv='refresh' content= '0:URL=?deleted' />";

}else{
  $msg="Unable To Delete Data ";

}

}if(isset($msg)){
  echo("<div class='alert alert-success' role='alert'>.$msg.</div>");

}


?>
</div>

</div>
</div>

<?php 
include('./AdminInclude/footer.php')

?>
<script>



document.title="Feedback";

</script>

