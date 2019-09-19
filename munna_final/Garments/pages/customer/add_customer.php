<?php
 
 if(isset($_POST["btnSubmit"])){
	 
	 $name=$_POST["txtcsname"];
	 $phone=$_POST["txtphone"];
	 $email=$_POST["txtemail"];
	 $address=$_POST["txtcsaddre"];
	 
	 
	 
 $result=$db->query("insert into customer(name,phone,email,address)values('$name','$phone','$email','$address')");
	
      if($result){
         echo "succssfully created";
	      
	  }	else{
		   echo "does not created";
	  }
	 
	 
 }

  

?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Customer Add</h3>
            </div>

            <form role="form" action="#" method="post">
              <div class="box-body">
              
              <div class="form-group">
                  <label for="txtcsname">Customer Name</label>
                  <input type="text" class="form-control" id="txtcsname" name="txtcsname" placeholder="Enter customer name">
                </div>
                <div class="form-group">
                  <label for="txtphone">Phone</label>
                  <input type="text" class="form-control" id="txtphone" name="txtphone" placeholder="Enter customer phone">
                </div>
                
                <div class="form-group">
                  <label for="txtemail">Email</label>
                  <input type="text" class="form-control" id="txtemail" name="txtemail" placeholder="Enter email">
                </div>
				
				<div class="form-group">
                  <label for="txtcsaddre">Address</label>
                  <input type="text" class="form-control" id="txtcsaddre" name="txtcsaddre" placeholder="Enter email">
                </div>
                
               
               </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" value="Submit" name="btnSubmit">Submit</button>
              </div>
            </form>
           </div>