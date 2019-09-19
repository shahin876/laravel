<?php
    $company_id=$_POST["txtComlId"];
	 
	$rs_row=$db->query("select id,company_name,phone,email from company where id='$company_id'");
    list($id,$company_name,$phone,$email)=$rs_row->fetch_row();
 
 if(isset($_POST["btnSubmit"])){
	  
	 $company_id=$_POST["txtComlId"];
	 
	 $company_name=$_POST["txtcname"];
	 $phone=$_POST["txtphone"];
	 
	 $email=$_POST["txtemail"];
	
	 
	  $db->query("update company set company_name='$company_name',phone='$phone',email='$email'  where id='$company_id'");
	 

	 
 }

  

?>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Compnay Add</h3>
            </div>

            <form role="form" action="#" method="post">
              <div class="box-body">
               <div class="form-group">
                  <label for="txtComlId">ID</label>
                  <input type="text" readonly value="<?php echo $company_id;?>" class="form-control" id="txtComlId" name="txtComlId">
                </div>
              
              <div class="form-group">
                  <label for="txtcname">Company Name</label>
                  <input type="text" value="<?php echo $company_name;?>" class="form-control" id="txtcname" name="txtcname" placeholder="Enter company name">
                </div>
                <div class="form-group">
                  <label for="txtphone">Phone</label>
                  <input type="text" value="<?php echo $phone;?>" class="form-control" id="txtphone" name="txtphone" placeholder="Enter company phone">
                </div>
                
                <div class="form-group">
                  <label for="txtemail">Email</label>
                  <input type="text" value="<?php echo $email;?>" class="form-control" id="txtemail" name="txtemail" placeholder="Enter email">
                </div>
                
               
               </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" value="Submit" name="btnSubmit">Submit</button>
              </div>
            </form>
           </div>