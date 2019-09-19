  <section class="content-header">
      <h1>
        View product
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
              <h3 class="box-title">product</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
            
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                 <th>id</th>
                  <th>company_id</th>
                  <th>name</th>
				  <th>price</th>
                  <th>qty</th>
                  <th>uom</th>
				 
               
                  
                </tr>
                </thead>
               
                
                <tbody>
                <?php
				  $db = new mysqli("localhost","root","","shahin");
				  $product=$db->query("select * from product ");
                  while(list($id,$company_id,$name,$price,$qty,$uom)=$product->fetch_row()){
					  echo "<tr>";
					 echo "<td>$id</td>";
					   echo "<td>$company_id</td>";
					   echo "<td>$name</td>";
					   echo "<td>$price</td>";
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