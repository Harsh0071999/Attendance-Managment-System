<?php 
require_once 'connection.php';
include('top.php');

if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['id']) && $_GET['id']>0){
  $type=get_safe_value($_GET['type']);
  $id=get_safe_value($_GET['id']);
  if($type=='delete'){
    mysqli_query($con,"delete from masterdata where id='$id'");
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Record Deleted!')
    </SCRIPT>");
    redirect('delete_data.php');
  }
  if($type=='active' || $type=='deactive'){
    $status=1;
    if($type=='deactive'){
      $status=0;
    }
    mysqli_query($con,"update masterdata set  where id='$id'");
    redirect('delete_data.php');
  }

}

$sql="select * from masterdata order by role";
$res=mysqli_query($con,$sql);

?>



 <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Master Data</h3>

            </div>
 <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-description">User can be Deleted with Delete button</h4>
                    <h6 class="card-description">Filter Data </h6>
                    <form method="get" action="search.php">
                      <input type="text" placeholder="Search Name" name="search">
                      <button type="submit" name="submit" class="btn btn-primary mr-2">Search </button>
                    </form>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>id</th>
                          <th>Name</th>
                          <th>password</th>
                          
                        </tr>
                      </thead>
                      <?php if(mysqli_num_rows($res)>0){
            $i=1;
            while($row=mysqli_fetch_assoc($res)){
            ?>
            <tr>
                            <td><?php echo $i?></td>
                             
               <td><?php echo $row['id']?></td>
              <td><?php echo $row['name']?></td>
              <td><?php echo $row['pass']?></td>
              
              <td>             
                &nbsp;
                <a href="?id=<?php echo $row['id']?>&type=delete"><button class="badge badge-danger delete_red hand_cursor">Delete</button></a>
              </td>
                           
                        </tr>
                        <?php 
            $i++;
            } } else { ?>
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


<?php 
include('footer.php');

?>



