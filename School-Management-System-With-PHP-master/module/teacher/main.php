<?php
include_once('../../service/mysqlcon.php');
/*$check=$_SESSION['login_id'];
$session=mysqli_query($link,"SELECT name  FROM teachers WHERE id='$check' ");
$row=mysqli_fetch_array($session);
$login_session = $loged_user_name = $row['name'];*/
if(!isset($login_session))
{
 session_start();
 $check=$_SESSION['login_id'];
$session=mysqli_query($link,"SELECT name  FROM teachers WHERE id='$check' ");
$row=mysqli_fetch_array($session);
$login_session = $loged_user_name = $row['name'];
header("Location:../../");
}else{
    session_destroy(); 
}

?>
