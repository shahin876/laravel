<?php
  if(isset($_POST["dltUser"])){
    $id = $_POST['userId'];
    if($db->query("delete from user where id = '$id'")){
      echo "Deleted";
    }
    
  }
 ?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Users
        <small>user info</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">User</a></li>
        <li class="active">User Info</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
            
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Username</th>
                  <th>Role</th>
                  <th>Edit/Delete</th>
                  
                </tr>
                </thead>
               
                
                <tbody>
                
                  <?php
				  
				  $user=$db->query("select u.id,u.username,r.name from user u,role r where r.id=u.role_id");
                  while(list($id,$username,$role)=$user->fetch_row()){
					  echo "<tr>";
					   echo "<td>$id</td>";
					   echo "<td>$username</td>";
					   echo "<td>$role</td>";
					   echo "<td><form style='display:inline;' action='home.php?page=4' method='post'>
						   <input type='hidden' value='$id' name='txtId'/>
						   <button class='btn btn-primary'><i class='fas fa-edit'></i> Edit</button>
					   </form> 
					  
					   
					   <form style='display:inline' method='POST'>
							  <input type='hidden' value='$id' name='userId'>
							  <button type='submit' name='dltUser'  class='btn btn-danger'><i class='fas fa-trash-alt'></i> Delete</button>
						</form>
					   </td>";
					  echo "</tr>";
					  
				  }

                ?>
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    