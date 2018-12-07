<?php

mysql_connect("localhost", "root", "") or die("Not Connect");
mysql_select_db("sahaj");

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$msg = $_POST['msg'];

if(!empty($_POST['name'])&& !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['msg']))
{
mysql_query("INSERT INTO sahaj (ID,name,email,mobile,msg) VALUES ('".NULL."','".$name."','".$email."','".$mobile."','".$msg."')") or die(mysql_error());

//mysql_query("INSERT INTO `sahaj`.`sahaj` (`ID`, `name`, `email`, `mobile`, `msg`) VALUES ('NULL', '$name', '$email', '$mobile', '$msg')") or die(mysql_error());

}
    
 ?>