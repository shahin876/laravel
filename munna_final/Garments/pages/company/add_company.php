<?php
 
 if(isset($_POST["btnSubmit"])){
	 
	 $company_name=$_POST["txtcname"];
	 $phone=$_POST["txtphone"];
	 
	 $email=$_POST["txtemail"];
	
	 
	 
	 
 $result=$db->query("insert into company(company_name,phone,email)values('$company_name','$phone','$email')");
	
      if($result){
         echo "succssfully created";
	      
	  }	else{
		   echo "does not created";
	  }
	 
	 
 }

  

?>
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Compnay Add</h3>
            </div>

            <form role="form" action="#" method="post">
              <div class="box-body">
              
              <div class="form-group">
                  <label for="txtcname">Company Name</label>
                  <input type="text" class="form-control" id="txtcname" name="txtcname" placeholder="Enter company name">
                </div>
                <div class="form-group">
                  <label for="txtphone">Phone</label>
                  <input type="text" class="form-control" id="txtphone" name="txtphone" placeholder="Enter company phone">
                </div>
                
                <div class="form-group">
                  <label for="txtemail">Email</label>
                  <input type="text" class="form-control" id="txtemail" name="txtemail" placeholder="Enter email">
                </div>
                
               
               </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" value="Submit" name="btnSubmit">Submit</button>
              </div>
            </form>
           </div>