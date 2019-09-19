<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View Users
        <small>user info</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
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
                 
                  
                </tr>
                </thead>
               
                
                <tbody>
                
                 <?php
				  
				  $users=$db->query("select u.id,u.username,r.name from user u,role r where r.id=u.role_id");
                  while(list($id,$username,$role)=$users->fetch_row()){
					  echo "<tr>";
					   echo "<td>$id</td>";
					   echo "<td>$username</td>";
					   echo "<td>$role</td>";
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
    