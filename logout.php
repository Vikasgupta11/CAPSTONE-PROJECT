<?php
session_start();
session_destroy();
echo"<script> location.href='index.php'</script>";
setcookie("email","",time()-3600,"/");
setcookie("course_id","",time()-3600,"/");


?>