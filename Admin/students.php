<?php

if(!isset($_SESSION)){
  session_start();
}
include('./AdminInclude/header.php');
include('../dbconnection.php');

if($_SESSION['is_admin_login']){
$adminEmail=$_SESSION['adminLogEmail'];

}else{
  // echo('<script> location.href="../index.php"; </script>');

}
?>


<div class="col-sm-9 mt-5">

<!-- Table -->

<p class="bg-dark text-white p-2">List of Students</p>

<?php
$sql="SELECT * FROM student ";
$result=$conn->query($sql);
if($result->num_rows > 0){

?>

<table class="table">

    <thead>
        <tr>
           <th scope="col">Student ID</th>
           <th scope="col">Name</th>
           <th scope="col">Email</th>
           <th scope="col">Action</th>
        
        </tr>
    </thead>

    <tbody>
<!-- getting data for the course page from database -->
<?php
while($row=$result->fetch_assoc()) 
{


     echo '   <tr>';
        echo  '<th scope="row">'.$row['stu_id'].'</th>';
               echo'  <td>'.$row['stu_name'].'</td>';
        echo '<td>'.$row['stu_email'].'</td>';

       echo ' <td>';

  echo   ' 
 
<form action="editstudent.php"  method="POST" class="d-inline">
<input type="hidden" name="id" value="'.$row["stu_id"].'"/>

  <button type="submit" 
         class="btn btn-info mr-3"
        
          name="view"
          value="view"><i class="fa fa-pen"></i>
        </button>
</form>


        <form action="" method="POST" class="d-inline" >
        <input type="hidden" name="id" value="'.$row["stu_id"].'"/>
          <button type="submit" 
         class="btn btn-info mr-3"
         
          name="delete"
          value="Delete"><i class="fa fa-trash-alt"></i></button>
</form>         

   </td>

        </tr>
';

}

?>

    </tbody>
</table>

<?php
}else{

echo"<div  class='alert alert-info text-center'><h4>0 Result <h4> </div>";

}

if(isset($_REQUEST['delete'])){
$sql="DELETE FROM student WHERE stu_id={$_REQUEST['id']}";
}if($conn->query($sql)==TRUE){
  // echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';

}else{
  echo("<div class='alert alert-info'>Unable to delete Data </div>");
}


?>

</div>
</div>



<!-- Div close from header -->


<!--  plus button at right  -->
<div  >
<a class="btn btn-danger box" href="./addnewstudent.php"
> <i class="fa fa-plus fa-2x"></i></a>  
</div>
  



<?php
include('./AdminInclude/footer.php')

?>
<script>



document.title="Students";

</script>