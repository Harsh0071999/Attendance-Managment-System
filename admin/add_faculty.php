<?php
include('top.php');
?>


        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> ADD FACULTY </h3>

            </div>
            <div class="card">
            <div class="card-body">
            	<form class="form-sample" action="registration_faculty.php" method="post">
            		<div class="form-group row">
            			<label id="id" class="col-sm-3 col-form-label">ID: </label>
            			<div class="col-sm-9"><input type="text" name="id" class="form-control" placeholder="Enter ID" required>
            			</div>
            		</div>
            		<div class="form-group row">
            			<label id="name" class="col-sm-3 col-form-label">Name: </label>
            			<div class="col-sm-9"><input type="text" name="name" class="form-control" placeholder="Enter Name" required>
            			</div>
            		</div>
            		<div class="form-group row">
            			<label id="mail" class="col-sm-3 col-form-label">E-Mail ID: </label>
            			<div class="col-sm-9"><input type="email" name="mail" class="form-control" placeholder="Enter E-Mail ID" required>
            			</div>
            		</div>
            		<div class="form-group row">
            			<label id="pass" class="col-sm-3 col-form-label">Password: </label>
            			<div class="col-sm-9"><input type="password" name="pass" class="form-control" placeholder="Enter Password" required>
            			</div>
            		</div>
            		<div class="form-group row">
            			<div class="col-sm-9"><button type="submit" class="btn btn-primary mr-2"> Add </button>
            			</div>
            		</div>
            	</form>
            </div>       
            </div>
                
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->

          <!-- partial -->
        </div>
<?php 
include('footer.php');

?>