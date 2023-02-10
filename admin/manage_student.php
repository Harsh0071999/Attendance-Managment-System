<?php
include('top.php');
include ('connection.php');

$msg="";
$name="";
$pass="";
$id="";

if(isset($_GET['id']) && $_GET['id']>0){
    $id=get_safe_value($_GET['id']);
    $row=mysqli_fetch_assoc(mysqli_query($con,"select * from masterdata where id='$id'"));
    $name=$row['name'];
    $pass=$row['pass'];

}

if(isset($_POST['submit'])){
    $name=get_safe_value($_POST['pass']);
    $pass=get_safe_value($_POST['pass']);

    if ($id=='') {
       $sql="select * from masterdata where name='$name'";
    }
    else{
    $sql="select * from masterdata where name='$name' and id!='$id'";
    }
     
    if(mysqli_num_rows(mysqli_query($con,$sql))>0){
       $msg="your category already added";
    }else{
         if($id==''){
            mysqli_query($con,"insert into masterdata(pass) values('$pass')");
        }else{
            mysqli_query($con,"update masterdata set pass='$pass' where id='$id'");
        }
    redirect('student_master.php');
    } 
}
?>
            <div class="dashboard-wrapper" style="margin-left: 130PX;">
            <div class="container-fluid  dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">RESET</h2>
                            <div class="page-breadcrumb">
         
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
<h5>Profile Edit</h5>
  <div class="card-body">
<form method="post" id="basicform" data-parsley-validate="">
  <div class="form-group">
 <label for="inputUserName">Name</label>
 <input id="inputUserName"  type="text"data-parsley-trigger="change"  class="form-control" disabled name="name"  value="<?php echo $name?>">
 </div>

<div class="error mt8"><p style="color:red;"><?php echo $msg ?></p></div>

 <div class="form-group" style="margin-top: 20px;">
   <label for="inputEmail">Edit password</label>

    <input id="inputEmail" type="text" autocomplete="off" name="pass" data-parsley-trigger="change" required="" placeholder="Enter password" class="form-control" value="<?php echo $pass?>"> 
         </div>
 <div class="col col-sm-10 col-lg-12 offset-sm-1 offset-lg-0" style="margin-top: 30px;">

 <button type="submit" class="badge badge-danger delete_red hand_cursor" name="submit">Submit</button>
<a href="student_master.php" class="btn btn-space btn-secondary">Cancel</a>
                                            </div>
                                     </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                   </div>
              </div>






 <?php include('footer.php');?>