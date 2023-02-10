<?php 

include('top_faculty_editprofile.php');

?>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> EDIT PROFILE </h3>

            </div>
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample">
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="name" value="<?php echo $name;?>" placeholder="current name"readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" type="email"  name="mail" value="<?php echo $mail;?>" placeholder="fcurrent email address">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="pass" value="<?php echo $pass;?>" placeholder="Password"readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">New Password</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="pass" placeholder="Password"readonly>
                        </div>
                      </div>
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input"> Remember me </label>
                      </div>

                      <button type="submit" class="btn btn-primary mr-2">Edit</button>
                      
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->

          <!-- partial -->
        </div>

        
<?php 

include('footer_faculty.php');

 ?>