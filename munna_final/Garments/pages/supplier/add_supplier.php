<?php
 
 if(isset($_POST["btnSubmit"])){
	 
	 $sname=$_POST["txtspname"];
	 $sphone=$_POST["txtphone"];
	 
	 $semail=$_POST["txtemail"];
	
	 
	 
	 
  $result=$db->query("insert into supplier(supplier_name,phone,email)values('$sname','$sphone','$semail')");
	
      if($result){
         echo "succssfully created";
	      
	  }	else{
		   echo "does not created";
	  }
	 
	 
 }

  

?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Suplier</h3>
            </div>

            <form role="form" action="#" method="post">
              <div class="box-body">
              
              <div class="form-group">
                  <label for="txtspname">Name</label>
                  <input type="text" class="form-control" id="txtspname" name="txtspname" placeholder="Enter suplier name">
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