  <section class="content-header">
      <h1>
        View suplier
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

                    <th>suplier_name</th>
                    <th>Phone</th>
                    <th>Email</th>
          
                  </tr>
              </thead>
               <tbody>
                   <?php
                    //  $db = new mysqli("localhost","root","","shahin");
                      $supplier=$db->query("select supplier_name,phone,email from supplier ");
                              while(list($sname,$phone,$email)=$supplier->fetch_row()){
                        echo "<tr>";
                      
                        
                        echo "<td>$sname</td>";
                        echo "<td>$phone</td>";
                        echo "<td>$email</td>";
                        
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