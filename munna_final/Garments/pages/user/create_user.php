<?php
 
 if(isset($_POST["btnSubmit"])){
	 
	 $role_id=$_POST["cmbRole"];
	 $username=$_POST["txtUsername"];
	 
	 $password=$_POST["pwdPassword"];
	 $retype_pass=$_POST["pwdRetyePass"];
	 
	 
	 if($password==$retype_pass){
		// $db = new mysqli("localhost","root","","shahin");
		 
		  $db->query("insert into user(username,password,role_id)values('$username','$password','$role_id')");
     
	      echo "succssfully created";
	 
	 }else{
		 
		 echo "password did not match.";
     }
	  
	 
	 
 }

  

?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create User</h3>
            </div>
<!-- form start -->
            <form role="form" action="#" method="post">
              <div class="box-body">
              
               <div class="form-group">
                  <label for="cmbRole">Role</label>
                  <select class="form-control" id="cmbRole" name="cmbRole">
                    <option value="1">Adminstrator</option>
                    <option value="2">Manager</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="txtUsername">Username</label>
                  <input type="text" class="form-control" id="txtUsername" name="txtUsername" placeholder="Enter username">
                </div>
                
                <div class="form-group">
                  <label for="pwdPassword">Password</label>
                  <input type="password" class="form-control" id="pwdPassword" name="pwdPassword" placeholder="Password">
                </div>
                 <div class="form-group">
                  <label for="pwdRetyePass">Retype Password</label>
                  <input type="password" class="form-control" id="pwdRetyePass" name="pwdRetyePass" placeholder="Password">
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" value="Submit" name="btnSubmit">Submit</button>
              </div>
            </form>
            </div>