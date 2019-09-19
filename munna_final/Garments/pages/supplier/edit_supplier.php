
<?php
  if(isset($_POST["btnSubmit"])){
	  
	 $spl_id=$_POST["txtId"];
	 
	 $splname=$_POST["txtsname"];
	 $phone=$_POST["txtphone"];
	 
	 $email=$_POST["txtemail"];

	  $db->query("update supplier set id = '$spl_id', supplier_name='$splname',phone='$phone',email='$email'  where id='$spl_id'");
	 
 }


?>
<?php

if(isset($_POST['hdnValue'])){
    $supplier_id=$_POST["hdnValue"];
    
    $rs_row=$db->query("select id,supplier_name,phone,email from supplier where id='$supplier_id'");
    list($id,$sname,$phone,$email)=$rs_row->fetch_row();


}




?>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Supplier</h3>
            </div>

            <form role="form" action="#" method="post">
              <div class="box-body">
               <div class="form-group">
                  <label for="txtComlId">ID</label>
                  <input type="text" readonly value="<?php echo $id;?>" class="form-control" id="txtComlId" name="txtId">
                </div>
              
              <div class="form-group">
                  <label for="txtcname">supplier  Name</label>
                  <input type="text" value="<?php echo $sname;?>" class="form-control" id="txtcname" name="txtsname" placeholder="Enter company name">
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