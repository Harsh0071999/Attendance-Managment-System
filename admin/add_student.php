<?php
include('top.php');
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ganpat University Attendance Portal</title>
    <link rel="shortcut icon" type="images/png" href="assets/images/Small_Logo.png"/>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/ICT.jpg" />
  </head>
  <body>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> ADD STUDENT </h3>

            </div>
            <div class="card">
            <div class="card-body">
            	<form class="form-sample" action="registration.php" method="post">
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
            			<label id="semester" class="col-sm-3 col-form-label">Semester: </label>
                        <div class="col-sm-9"><select name="semester" id="semester" required>
                            <optgroup label="1st Year">
                                <option value="1">Sem-1</option>
                                <option value="2">Sem-2</option>
                            </optgroup>
                            <optgroup label="2nd Year">
                                <option value="3">Sem-3</option>
                                <option value="4">Sem-4</option>
                            </optgroup>
                            <optgroup label="3rd Year">
                                <option value="5">Sem-5</option>
                                <option value="6">Sem-6</option>
                            </optgroup>
                            <optgroup label="4th Year">
                                <option value="7">Sem-7</option>
                                <option value="8">Sem-8</option>
                            </optgroup>
                        </select>                            
                        </div>            			
            		</div>
                    <div class="form-group row">
                        <label id="class" class="col-sm-3 col-form-label">Class: </label>
                        <div class="col-sm-9"><select name="class" id="class" required>
                                <option value="A">Class A</option>
                                <option value="B">Class B</option>
                                <option value="C">Class C</option>
                                <option value="D">Class D</option>
                        </select>                            
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
      <!-- page-body-wrapper ends -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<?php 
include('footer.php');

?>