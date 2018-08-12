<?php
session_start();
$host="localhost";
$username="id6472940_schoolroot";
$password="3menroot";
$db_name="id6472940_schooldb";
$link=mysqli_connect("$host", "$username", "$password")or die("Cannot Connect");
mysqli_select_db($link,$db_name)or die("Cannot Select DB");
?>