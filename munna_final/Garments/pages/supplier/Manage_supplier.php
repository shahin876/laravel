<?php
  if(isset($_POST["btnDelete"])){
    $id = $_POST["userId"];
    if($db->query("delete from supplier where id = '$id'")){
      echo "Deleted";
    }
    
  }
?>
 
 
 
 <section class="content-header">
      <h1>
        Manager suplier
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
              <h3 class="box-title">suplier</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
            
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Supplier Name</th>
				          <th>Phone</th>
                  <th>Email</th>
				          <th>Edit/Delete</th>
				  
				  
                 
                  
                </tr>
                </thead>
               
                
                <tbody>
                  <?php
				//  $db = new mysqli("localhost","root","","shahin");
				  $supplier=$db->query("select * from supplier ");
                  while(list($id,$sname,$phone,$email)=$supplier->fetch_row()){
					  echo "<tr>";
					 
					   echo "<td>$id</td>";
					   echo "<td>$sname</td>";
					   echo "<td>$phone</td>";
					   echo "<td>$email</td>";
					   echo "<td><form style='display:inline;' action='home.php?page=28' method='post'>
						   <input type='hidden' value='$id' name='hdnValue'/>
						   <button class='btn btn-primary'> Edit<i class='fas fa-edit'></i> </button>
					   </form> 
					  
					   
					   <form style='display:inline' action='' method='post' onSubmit='return confirm(\"Are you Sure?\")'>
							  <input type='hidden' value='$id' name='userId'>
							  <button type='submit' name='btnDelete' class='btn btn-danger'>Delete<i class='fas fa-trash-alt'></i></button>
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