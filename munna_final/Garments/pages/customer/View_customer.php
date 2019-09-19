
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Customer view</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
            
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID </th>
                  <th> Name</th>
				  <th>Phone</th>
                  <th>Email</th>
				  <th>Address</th>
				 
                 
                  
                </tr>
                </thead>
               
                
                <tbody>

                  <?php
				  $db = new mysqli("localhost","root","","shahin");
				  $customer=$db->query("select * from customer ");
                  while(list($id,$name,$phone,$email,$address)=$customer->fetch_row()){
					  echo "<tr>";
					 
					   echo "<td>$id</td>";
					   echo "<td>$name</td>";
					   echo "<td>$phone</td>";
					   echo "<td>$email</td>";
					    echo "<td>$address</td>";
					   
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