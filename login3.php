<?php  
$encrypt= "do not copy";
session_start();    
    require_once ('connection.php');  
    $username = $_POST['uname'];  
    $password = $_POST['psw'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "SELECT * from masterdata WHERE name = '$username' and pass = '$password' and role=3";  
        $sql1 = "SELECT id from `masterdata` WHERE name = '$username' AND pass = '$password'";
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        $id = mysqli_query($con, $sql1);
        if($count == 1){  
        
        $masterdata = mysqli_fetch_array($id);
        $id = ($masterdata['id']);
        $_SESSION["id"]=$row["id"];


            echo "<h1><center> Login successful </center></h1>";
            header("location: admin/index.php?id=".$encrypt);  
        }  
        else{  
            echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('INVALID CREDENTIALS!')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");  
        }     
?>