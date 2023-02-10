<?php
include "Connection.php";
  $old_password =$_POST['psw'];
  $new_password =$_POST['npsw'];
  $mail=$_POST['email'];

    $sql="SELECT * FROM masterdata WHERE mail='$mail' AND pass ='$old_password'";
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
  if($count==1)
  {
    $update=("UPDATE masterdata SET pass = '$new_password' WHERE mail='$mail' and pass='$old_password'");
    $res = mysqli_query($con, $update);

      echo ("<SCRIPT LANGUAGE='JavaScript'> 
            window.alert('Updated Password')
            window.location.href='javascript:history.go(-1)';
            </SCRIPT>");
  }
  else
    echo ("<SCRIPT LANGUAGE='JavaScript'> 
          window.alert('INVALID CREDENTIALS!')
          window.location.href='javascript:history.go(-1)';
          </SCRIPT>");
?>
