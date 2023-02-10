<?php
require_once 'connection.php';
include('top.php');
 
  $search=$_GET['search'];
  $search = mysqli_real_escape_string($con, $search); 
  $sql="select * from masterdata where name='$search' and role=1";
  $res=mysqli_query($con,$sql);
  
  ?>
  <script>
                        function myFunction() {
                          location.replace("http://localhost/PROJECT-AD3/admin/student_master.php")
                        }
                        </script>
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Student Data</h3>

            </div>


   <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-description">Password can be edited with Edit button</h4>
                    <h6 class="card-description">Filter Data </h6>
                      <form method="get" action="search_student.php">
                        <input type="text" placeholder="Search Name" name="search">
                        <button type="submit" name="submit" class="btn btn-primary mr-2">Search </button>
                      </form>
                        <button onclick="myFunction()" class="badge badge-danger delete_red hand_cursor">Clear Filter</button>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>id</th>
                            <th>Name</th>
                            <th>password</th>
                            <th>Last Updated</th>
                          <th>Action</th>
                            
                          </tr>
                        </thead>
             <?php 
                        if(mysqli_num_rows($res)>0)
                        {
                            $i=1;
                        while($row=mysqli_fetch_assoc($res))
                        {
              ?>
              <tr>
                <td><?php echo $i?></td>   
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['pass']?></td>
                <td><?php echo $row['time']?></td>
              
              <td>
                <a href="manage_student.php?id=<?php echo $row['id']?>"><button class="badge badge-success hand_cursor">Edit</button></a>&nbsp;
                           
                        </td>                             
                </tr>
            <?php 
              $i++;
              } 
              } 
              else 
              { 
            ?>
              <tr>
                <td colspan="5">No data found</td>
              </tr>
              <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
           
   </div>
  </div>
</div>
</div>
?>





<?php 
include('footer.php');

?>