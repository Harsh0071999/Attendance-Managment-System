<?php
require_once 'connection.php';
include('top_faculty.php');
 
  $search=$_GET['search'];
  $search = mysqli_real_escape_string($con, $search); 
  $sql="select * from masterdata where name='$search' and role=1";
  $res=mysqli_query($con,$sql);
  
  ?>
  <script>
                        function myFunction() {
                          location.replace("http://localhost/PROJECT-AD3/faculty_student.php")
                        }
                        </script>
   <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Student Data</h4>
                      
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
                            <th>E-Mail</th>
                            <th>Last Updated</th>
                            
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
                <td><?php echo $row['mail']?></td>
                <td><?php echo $row['time']?></td>                             
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
?>





<?php 
include('footer_faculty.php');

?>