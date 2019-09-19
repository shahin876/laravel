	<?php
 
 if(isset($_POST["btnSubmit"])){
	 $company_id=$_POST["txtcid"];
	 $name=$_POST["txtmdname"];
	 $old_price=$_POST["txtmdoldprice"];
	 $new_price=$_POST["txtmdnewprice"];
	 $qty=$_POST["txtmdqty"];
	 $uom=$_POST["txtmduom"];
	
	
	 
 $result=$db->query("insert into Medicine(company_id,name,old_price,new_price,qty,uom)values('$company_id','$name','$old_price','$new_price','$qty','$uom')");
	
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
                  <label for="txtcid">company id</label>
                  <input type="text" class="form-control" id="txtcid" name="txtcid" placeholder="Enter company name">
                </div>
                <div class="form-group">
                  <label for="txtmdname">name</label>
                  <input type="text" class="form-control" id="txtmdname" name="txtmdname" placeholder="Enter company phone">
                </div>
                
                <div class="form-group">
                  <label for="txtmdoldprice">old_price</label>
                  <input type="text" class="form-control" id="txtmdoldprice" name="txtmdoldprice" placeholder="Enteroldprice">
                </div>
                            <div class="form-group">
                  <label for="txtmdnewprice">new_price</label>
                  <input type="text" class="form-control" id="txtmdnewprice" name="txtmdnewprice" placeholder="Enter new price">
                </div>
                            <div class="form-group">
                  <label for="txtmdqty">qty</label>
                  <input type="text" class="form-control" id="txtmdqty" name="txtmdqty" placeholder="Enter qty">
                </div>
                            <div class="form-group">
                  <label for="txtmduom">uom</label>
                  <input type="text" class="form-control" id="txtmduom" name="txtmduom" placeholder="Enter uom">
                </div>
                
               
               </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" value="Submit" name="btnSubmit">Submit</button>
              </div>
            </form>
           </div>
       