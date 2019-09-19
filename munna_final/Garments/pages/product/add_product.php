<?php
 
 if(isset($_POST["btnSubmit"])){
	 
	 $company_id=$_POST["txtproducid"];
	 $name=$_POST["txtname"];
	 
	 $price=$_POST["txtproprice"];
	 $qty=$_POST["txtproqty"];
	 $uom=$_POST["txtprouom"];
	
	 
	 
	 
 $result=$db->query("insert into product(company_id,name,price,qty,uom)values('company_id','name','price','qty','uom')");
	
      if($result){
         echo "succssfully created";
	      
	  }	else{
		   echo "does not created";
	  }
	 
	 
 }

  

?>
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">product Add</h3>
            </div>

            <form role="form" action="#" method="post">
              <div class="box-body">
              
              <div class="form-group">
                  <label for="txtproducid">company_id</label>
                  <input type="text" class="form-control" id="txtproducid" name="txtproducid" placeholder="Enter product name">
                </div>
                <div class="form-group">
                  <label for="txtname">Name</label>
                  <input type="text" class="form-control" id="txtname" name="txtname" placeholder="Enter company phone">
                </div>
                
                <div class="form-group">
                  <label for="txtproprice">price</label>
                  <input type="text" class="form-control" id="txtproprice" name="txtproprice" placeholder="Enter email">
                </div>
                    <div class="form-group">
                  <label for="txtproqty">qty</label>
                  <input type="text" class="form-control" id="txtproqty" name="txtproqty" placeholder="Enter email">
                </div>
                    <div class="form-group">
                  <label for="txtprouom">uom</label>
                  <input type="text" class="form-control" id="txtprouom" name="txtprouom" placeholder="Enter uom">
                </div>
                
               
               </div>
              <!-- /.box-body --> 
              
                  <th></th>
				  <th></th>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" value="Submit" name="btnSubmit">Submit</button>
              </div>
            </form>
           </div>