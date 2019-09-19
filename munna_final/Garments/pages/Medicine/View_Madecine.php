  <section class="content-header">
      <h1>
        View Customer
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
              <h3 class="box-title">Customer</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
            
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                   <th>company_id</th>
                  <th>name</th>
				  <th>old_price</th>
                  <th>new_price</th>
				  <th>qty</th>
				  <th>uom<th>
				 
                 
                  
                </tr>
                </thead>
               
                
                <tbody>
				 <?php
				  $db = new mysqli("localhost","root","","shahin");
				  $Medicine=$db->query("select * from Medicine ");
                  while(list($company_id,$name,$old_price,$new_price,$qty,$uom)=$Medicine->fetch_row()){
					  echo "<tr>";
					    echo "<td>$company_id</td>";
					   echo "<td>$name</td>";
					   echo "<td>$old_price</td>";
					   echo "<td>$new_price</td>";
					    echo "<td>$qty</td>";
						 echo "<td>$uom</td>";
					   
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