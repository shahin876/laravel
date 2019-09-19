<?php
  $con = new mysqli("localhost","root","","shahin");
?>
<?php
  if(isset($_POST["save"])){
    $supplier_id = $_POST["cmbSupplier"]; 
    
    $month = $_POST["cmbMonth"];
    $day = $_POST["cmbDay"];
    $year = $_POST["cmbYear"];

    if(checkdate($month,$day,$year)){
      $date_str=$year."-".$month."-".$day;	  
      $purchase_date=date("Y-m-d",strtotime($date_str));
      
      $con->query("insert into purchase_order(supplier_id,purchase_dt)values('$supplier_id','$purchase_date')");
      $invoice_id = $con->insert_id;

      foreach($_SESSION["cart"] as $row){
        $prd_id = $row["id"];
        $qty = $row["qty"];
        $uom = $row["uom"];
        $price = $row["price"];

        $con->query("insert into purchase_details(purchase_id,product_id,uom,qty,price)values('$invoice_id','$prd_id','$uom','$qty','$price')");
        
      }
      echo "Check";
      unset($_SESSION["cart"]);
      echo "Saved Data";
      
    }else{
      echo "Something Wrong";
    }
  }
?>

<?php


  if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
  }

  if(isset($_POST["btnRemove"])){
    $rmv = $_POST["rmvid"];
    remove_itm($rmv);
  }
  function remove_itm($id){
    if(array_key_exists($id,$_SESSION["cart"])){
      unset($_SESSION['cart'][$id]);
    }
  }
?>




<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">sales Add</h3>
            </div>

            <form role="form" action="#" method="post">
              <div class="box-body">
              
              <div class="form-group">
                  <label for="txtslid">sales_id</label>
                  <input type="text" class="form-control" id="txtslid" name="txtslid" placeholder="Enter sales name">
                </div>
                <div class="form-group">
                  <label for="txtprdid">product_id</label>
                  <input type="text" class="form-control" id="txtprdid" name="txtprdid" placeholder="Enter product_id">
                </div>
                
                <div class="form-group">
                  <label for="txtprouom">uom</label>
                  <input type="text" class="form-control" id="txtprouom" name="txtprouom" placeholder="Enter uom">
                </div>
                 <div class="form-group">
                  <label for="txtproqty"> qty</label>
                  <input type="text" class="form-control" id="txtproqty" name="txtproqty" placeholder="Enter uom">
                </div>
                 <div class="form-group">
                  <label for="txtpropric">price</label>
                  <input type="text" class="form-control" id="txtpropric" name="txtpropric" placeholder="Enter uom">
                </div>
                
               
               </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" value="Submit" name="btnSubmit">Submit</button>
              </div>
            </form>
           </div>