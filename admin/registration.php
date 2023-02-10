<?php

session_start();

require_once 'connection.php';

//mysql_select_db($con,'signup');
$id = $_POST['id'];
$name = $_POST['name'];
$mail= $_POST['mail'];
$pass = $_POST['pass'];
$role = 1;
$semester = $_POST['semester'];
$class = $_POST['class'];

$s="select * from masterdata where id = '$id'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('ID Already Taken')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
else{
	$reg="insert into masterdata(id,name,mail,pass,role,time) values('$id','$name','$mail','$pass','$role',current_timestamp())";
	mysqli_query($con,$reg);
	$reg="insert into studentdata(id,name,semester,class) values('$id','$name','$semester','$class');";
	mysqli_query($con,$reg);
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='http://localhost/PROJECT-AD3/admin/add_student.php';
    </SCRIPT>");
}
?>