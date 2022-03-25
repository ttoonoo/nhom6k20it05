<?php
if (isset($_post['submit']) && $_post["username"] != '' && $_post["password"] !='' && $_post["email"] !=''){
$username= $_post["username"];
$password= $_post["password"];
$email=$_post["email"];
}else{
 header("location:register.php");
}
?>